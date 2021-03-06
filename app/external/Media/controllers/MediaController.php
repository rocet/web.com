<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/11
 * Time: 9:31
 */

namespace App\External\Media\Controllers;

class MediaController extends \BaseController {


	public function index(){
		return \View::make('Media::index')->with(array('item' => $this->dataApi()->indexWithRelate( array('user') ) ));
	}

	public function store(){
		if ( $this->validPass( $process = $this->dataApi()->store( \Input::except( '_token' ) ) ) ) {
			return \Redirect::route( 'message' )->with( 'message', 'Store Success <a href="' . \Request::header('Referer') . '">return</a>' );
		}
		if ( ! $process ) {
			$process = new \Illuminate\Support\MessageBag( array( 'sys_error' => 'error' ) );
		}
		return \Redirect::back()->with(\Input::except( '_token' ))->withErrors( $process );
	}

	protected function modelName() {
		return substr( strrchr( get_class( $this ), '\\' ), 1, - 10 );
	}

	protected function dataApi( $model = '' ) {
		$controller = 'App\External\Media\Controllers\Data\\' . ( $model ?: $this->modelName() ) . 'Controller';

		return class_exists( $controller ) ? \App::make( $controller, $this->getCurrentRelation() )->initRelation( $this->getCurrentRelation() ) : false;
	}

	public function show($name = '', $content = '', $attrs = array(), $relates = array() ) {
		return \View::make( 'Media::show' )->with(array('name'=> $name, 'content' => $content, 'attrs' => $attrs, 'relates' => $relates ))->render();
	}

	public function process() {

		if( \Input::get('item_id') ){

		}

		//header('Access-Control-Allow-Origin: http://www.baidu.com'); //设置http://www.baidu.com允许跨域访问
		//header('Access-Control-Allow-Headers: X-Requested-With,X_Requested_With'); //设置允许的跨域header
		error_reporting( E_ERROR );

		$CONFIG = json_decode( preg_replace( "/\/\*[\s\S]+?\*\//", "", $this->actionConfig() ), true );
		$action = Input::get( 'action' );
		switch ( $action ) {
			case 'config':
				$result = $CONFIG;
				break;

			/* 上传图片 */
			case 'uploadimage':
				/* 上传涂鸦 */
			case 'uploadscrawl':
				/* 上传视频 */
			case 'uploadvideo':
				/* 上传文件 */
			case 'uploadfile':
				$result = $this->actionUpload( $CONFIG );
				break;

			/* 列出图片 */
			case 'listimage':
				$result = $this->actionList( $CONFIG );
				break;
			/* 列出文件 */
			case 'listfile':
				$result = $this->actionList( $CONFIG );
				break;
			/* 删除文件/图片 */
			case 'destoryfile':
				$result = $this->actionDestory( $CONFIG );
				break;

			/* 抓取远程文件 */
			case 'catchimage':
				$result = $this->actionCrawler( $CONFIG );
				break;

			default:
				$result = array(
					'state' => '请求地址出错'
				);
				break;
		}
		$callback = Input::get( 'callback' );
		/* 输出结果 */
		if ( $callback ) {
			if ( preg_match( "/^[\w_]+$/", $callback ) ) {
				exit( htmlspecialchars( $callback ) . '(' . $result . ')' );
			} else {
				return Response::json( array(
					'state' => 'callback参数不合法'
				) );
			}
		} else {
			return Response::json( $result );
		}
	}

	protected function actionUpload( $CONFIG ) {
		/* 上传配置 */
		$base64 = "upload";
		switch ( htmlspecialchars( $_GET['action'] ) ) {
			case 'uploadimage':
				$config    = array(
					"pathFormat" => $CONFIG['imagePathFormat'],
					"maxSize"    => $CONFIG['imageMaxSize'],
					"allowFiles" => $CONFIG['imageAllowFiles']
				);
				$fieldName = $CONFIG['imageFieldName'];
				break;
			case 'uploadscrawl':
				$config    = array(
					"pathFormat" => $CONFIG['scrawlPathFormat'],
					"maxSize"    => $CONFIG['scrawlMaxSize'],
					"allowFiles" => $CONFIG['scrawlAllowFiles'],
					"oriName"    => "scrawl.png"
				);
				$fieldName = $CONFIG['scrawlFieldName'];
				$base64    = "base64";
				break;
			case 'uploadvideo':
				$config    = array(
					"pathFormat" => $CONFIG['videoPathFormat'],
					"maxSize"    => $CONFIG['videoMaxSize'],
					"allowFiles" => $CONFIG['videoAllowFiles']
				);
				$fieldName = $CONFIG['videoFieldName'];
				break;
			case 'uploadfile':
			default:
				$config    = array(
					"pathFormat" => $CONFIG['filePathFormat'],
					"maxSize"    => $CONFIG['fileMaxSize'],
					"allowFiles" => $CONFIG['fileAllowFiles']
				);
				$fieldName = $CONFIG['fileFieldName'];
				break;
		}

		/* 生成上传实例对象并完成上传 */
		$up = new Uploader( $fieldName, $config, $base64 );

		/**
		 * 得到上传文件所对应的各个参数,数组结构
		 * array(
		 *     "state" => "",          //上传状态，上传成功时必须返回"SUCCESS"
		 *     "url" => "",            //返回的地址
		 *     "title" => "",          //新文件名
		 *     "original" => "",       //原始文件名
		 *     "type" => ""            //文件类型
		 *     "size" => "",           //文件大小
		 * )
		 */

		/* 返回数据 */
		$info = $up->getFileInfo();
		if($info['state'] == 'SUCCESS'){
			$datas = array();
			$datas['path'] = $info['url'];
			\Input::get('component_id') && $datas['component_id'] = \Input::get('component_id');
			\Input::get('item_id') && $datas['item_id'] = \Input::get('item_id');
			\Input::get('user_id') && $datas['user_id'] = \Input::get('user_id');
			\Input::get('title') && $datas['title'] = \Input::get('title');
			\Input::get('description') && $datas['description'] = \Input::get('description');
			if ( $this->validPass( $process = $this->dataApi()->store( $datas ) ) ) {
				$info['media_id'] = $process->id;
				return $info;
			} else {
				return array(
					"state" => "数据库添加错误"
				);
			}
		} else {
			return $info;
		}
	}

	protected function actionList( $CONFIG ) {

		/* 判断类型 */
		switch ( $_GET['action'] ) {
			/* 列出文件 */
			case 'listfile':
				$allowFiles = $CONFIG['fileManagerAllowFiles'];
				$listSize   = $CONFIG['fileManagerListSize'];
				$path       = $CONFIG['fileManagerListPath'];
				break;
			/* 列出图片 */
			case 'listimage':
			default:
				$allowFiles = $CONFIG['imageManagerAllowFiles'];
				$listSize   = $CONFIG['imageManagerListSize'];
				$path       = $CONFIG['imageManagerListPath'];
		}
		$allowFiles = substr( str_replace( ".", "|", join( "", $allowFiles ) ), 1 );

		/* 获取参数 */
		$size  = isset( $_GET['size'] ) ? htmlspecialchars( $_GET['size'] ) : $listSize;
		$start = isset( $_GET['start'] ) ? htmlspecialchars( $_GET['start'] ) : 0;
		$end   = $start + $size;

		/* 获取文件列表 */
		$path  = $_SERVER['DOCUMENT_ROOT'] . ( substr( $path, 0, 1 ) == "/" ? "" : "/" ) . $path;
		$files = $this->getfiles( $path, $allowFiles );
		if ( ! count( $files ) ) {
			return array(
				"state" => "no match file",
				"list"  => array(),
				"start" => $start,
				"total" => count( $files )
			);
		}

		/* 获取指定范围的列表 */
		$len = count( $files );
		for ( $i = min( $end, $len ) - 1, $list = array(); $i < $len && $i >= 0 && $i >= $start; $i -- ) {
			$list[] = $files[ $i ];
		}
		//倒序
		//for ($i = $end, $list = array(); $i < $len && $i < $end; $i++){
		//    $list[] = $files[$i];
		//}

		/* 返回数据 */
		$result = array(
			"state" => "SUCCESS",
			"list"  => $list,
			"start" => $start,
			"total" => count( $files )
		);

		return $result;

	}

	protected function actionDestory( $CONFIG ) {
		/* 返回数据 */
		dd(\Input::all());
		$result = array(
			"state" => "SUCCESSS",
			"msg" => "DDD",
		);

		return $result;
	}

	protected function actionCrawler( $CONFIG ) {
		set_time_limit( 0 );
		/* 上传配置 */
		$config    = array(
			"pathFormat" => $CONFIG['catcherPathFormat'],
			"maxSize"    => $CONFIG['catcherMaxSize'],
			"allowFiles" => $CONFIG['catcherAllowFiles'],
			"oriName"    => "remote.png"
		);
		$fieldName = $CONFIG['catcherFieldName'];

		/* 抓取远程图片 */
		$list = array();
		if ( isset( $_POST[ $fieldName ] ) ) {
			$source = $_POST[ $fieldName ];
		} else {
			$source = $_GET[ $fieldName ];
		}
		foreach ( $source as $imgUrl ) {
			$item = new Uploader( $imgUrl, $config, "remote" );
			$info = $item->getFileInfo();
			array_push( $list, array(
				"state"    => $info["state"],
				"url"      => $info["url"],
				"size"     => $info["size"],
				"title"    => htmlspecialchars( $info["title"] ),
				"original" => htmlspecialchars( $info["original"] ),
				"source"   => htmlspecialchars( $imgUrl )
			) );
		}

		/* 返回抓取数据 */

		return array(
			'state' => count( $list ) ? 'SUCCESS' : 'ERROR',
			'list'  => $list
		);
	}

	protected function actionConfig() {
		$auth_id = \Auth::id();
		return <<<EOT
{
    /* 上传图片配置项 */
    "imageActionName": "uploadimage", /* 执行上传图片的action名称 */
    "imageFieldName": "upfile", /* 提交的图片表单名称 */
    "imageMaxSize": 2048000, /* 上传大小限制，单位B */
    "imageAllowFiles": [".png", ".jpg", ".jpeg", ".gif", ".bmp"], /* 上传图片格式显示 */
    "imageCompressEnable": true, /* 是否压缩图片,默认是true */
    "imageCompressBorder": 1600, /* 图片压缩最长边限制 */
    "imageInsertAlign": "none", /* 插入的图片浮动方式 */
    "imageUrlPrefix": "", /* 图片访问路径前缀 */
    "imagePathFormat": "/upload/$auth_id/image/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可以自定义保存路径和文件名格式 */
                                /* {filename} 会替换成原文件名,配置这项需要注意中文乱码问题 */
                                /* {rand:6} 会替换成随机数,后面的数字是随机数的位数 */
                                /* {time} 会替换成时间戳 */
                                /* {yyyy} 会替换成四位年份 */
                                /* {yy} 会替换成两位年份 */
                                /* {mm} 会替换成两位月份 */
                                /* {dd} 会替换成两位日期 */
                                /* {hh} 会替换成两位小时 */
                                /* {ii} 会替换成两位分钟 */
                                /* {ss} 会替换成两位秒 */
                                /* 非法字符 \ : * ? " < > | */
                                /* 具请体看线上文档: fex.baidu.com/ueditor/#use-format_upload_filename */

    /* 涂鸦图片上传配置项 */
    "scrawlActionName": "uploadscrawl", /* 执行上传涂鸦的action名称 */
    "scrawlFieldName": "upfile", /* 提交的图片表单名称 */
    "scrawlPathFormat": "/upload/$auth_id/image/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可以自定义保存路径和文件名格式 */
    "scrawlMaxSize": 2048000, /* 上传大小限制，单位B */
    "scrawlUrlPrefix": "", /* 图片访问路径前缀 */
    "scrawlInsertAlign": "none",

    /* 截图工具上传 */
    "snapscreenActionName": "uploadimage", /* 执行上传截图的action名称 */
    "snapscreenPathFormat": "/upload/$auth_id/image/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可以自定义保存路径和文件名格式 */
    "snapscreenUrlPrefix": "", /* 图片访问路径前缀 */
    "snapscreenInsertAlign": "none", /* 插入的图片浮动方式 */

    /* 抓取远程图片配置 */
    "catcherLocalDomain": ["127.0.0.1", "localhost", "img.baidu.com"],
    "catcherActionName": "catchimage", /* 执行抓取远程图片的action名称 */
    "catcherFieldName": "source", /* 提交的图片列表表单名称 */
    "catcherPathFormat": "/upload/$auth_id/image/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可以自定义保存路径和文件名格式 */
    "catcherUrlPrefix": "", /* 图片访问路径前缀 */
    "catcherMaxSize": 2048000, /* 上传大小限制，单位B */
    "catcherAllowFiles": [".png", ".jpg", ".jpeg", ".gif", ".bmp"], /* 抓取图片格式显示 */

    /* 上传视频配置 */
    "videoActionName": "uploadvideo", /* 执行上传视频的action名称 */
    "videoFieldName": "upfile", /* 提交的视频表单名称 */
    "videoPathFormat": "/upload/$auth_id/video/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可以自定义保存路径和文件名格式 */
    "videoUrlPrefix": "", /* 视频访问路径前缀 */
    "videoMaxSize": 102400000, /* 上传大小限制，单位B，默认100MB */
    "videoAllowFiles": [
        ".flv", ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg",
        ".ogg", ".ogv", ".mov", ".wmv", ".mp4", ".webm", ".mp3", ".wav", ".mid"], /* 上传视频格式显示 */

    /* 上传文件配置 */
    "fileActionName": "uploadfile", /* controller里,执行上传视频的action名称 */
    "fileFieldName": "upfile", /* 提交的文件表单名称 */
    "filePathFormat": "/upload/$auth_id/file/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可以自定义保存路径和文件名格式 */
    "fileUrlPrefix": "", /* 文件访问路径前缀 */
    "fileMaxSize": 51200000, /* 上传大小限制，单位B，默认50MB */
    "fileAllowFiles": [
        ".png", ".jpg", ".jpeg", ".gif", ".bmp",
        ".flv", ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg",
        ".ogg", ".ogv", ".mov", ".wmv", ".mp4", ".webm", ".mp3", ".wav", ".mid",
        ".rar", ".zip", ".tar", ".gz", ".7z", ".bz2", ".cab", ".iso",
        ".doc", ".docx", ".xls", ".xlsx", ".ppt", ".pptx", ".pdf", ".txt", ".md", ".xml"
    ], /* 上传文件格式显示 */

    /* 列出指定目录下的图片 */
    "imageManagerActionName": "listimage", /* 执行图片管理的action名称 */
    "imageManagerListPath": "/upload/$auth_id/image/", /* 指定要列出图片的目录 */
    "imageManagerListSize": 20, /* 每次列出文件数量 */
    "imageManagerUrlPrefix": "", /* 图片访问路径前缀 */
    "imageManagerInsertAlign": "none", /* 插入的图片浮动方式 */
    "imageManagerAllowFiles": [".png", ".jpg", ".jpeg", ".gif", ".bmp"], /* 列出的文件类型 */

    /* 列出指定目录下的文件 */
    "fileManagerActionName": "listfile", /* 执行文件管理的action名称 */
    "fileManagerListPath": "/upload/$auth_id/file/", /* 指定要列出文件的目录 */
    "fileManagerUrlPrefix": "", /* 文件访问路径前缀 */
    "fileManagerListSize": 20, /* 每次列出文件数量 */
    "fileManagerAllowFiles": [
        ".png", ".jpg", ".jpeg", ".gif", ".bmp",
        ".flv", ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg",
        ".ogg", ".ogv", ".mov", ".wmv", ".mp4", ".webm", ".mp3", ".wav", ".mid",
        ".rar", ".zip", ".tar", ".gz", ".7z", ".bz2", ".cab", ".iso",
        ".doc", ".docx", ".xls", ".xlsx", ".ppt", ".pptx", ".pdf", ".txt", ".md", ".xml"
    ], /* 列出的文件类型 */

	/* 删除文件/图片 */
	"destoryActionName": "destoryfile" /* 执行抓取远程图片的action名称 */
}
EOT;

	}


	/**
	 * 遍历获取目录下的指定类型的文件
	 *
	 * @param $path
	 * @param array $files
	 *
	 * @return array
	 */
	protected function getfiles( $path, $allowFiles, &$files = array() ) {
		if ( ! is_dir( $path ) ) {
			return null;
		}
		if ( substr( $path, strlen( $path ) - 1 ) != '/' ) {
			$path .= '/';
		}
		$handle = opendir( $path );
		while ( false !== ( $file = readdir( $handle ) ) ) {
			if ( $file != '.' && $file != '..' ) {
				$path2 = $path . $file;
				if ( is_dir( $path2 ) ) {
					$this->getfiles( $path2, $allowFiles, $files );
				} else {
					if ( preg_match( "/\.(" . $allowFiles . ")$/i", $file ) ) {
						$files[] = array(
							'url'   => substr( $path2, strlen( $_SERVER['DOCUMENT_ROOT'] ) ),
							'mtime' => filemtime( $path2 )
						);
					}
				}
			}
		}

		return $files;
	}
}

class Uploader {
	private $fileField; //文件域名
	private $file; //文件上传对象
	private $base64; //文件上传对象
	private $config; //配置信息
	private $oriName; //原始文件名
	private $fileName; //新文件名
	private $fullName; //完整文件名,即从当前配置目录开始的URL
	private $filePath; //完整文件名,即从当前配置目录开始的URL
	private $fileSize; //文件大小
	private $fileType; //文件类型
	private $stateInfo; //上传状态信息,
	private $stateMap = array( //上传状态映射表，国际化用户需考虑此处数据的国际化
		"SUCCESS", //上传成功标记，在UEditor中内不可改变，否则flash判断会出错
		"文件大小超出 upload_max_filesize 限制",
		"文件大小超出 MAX_FILE_SIZE 限制",
		"文件未被完整上传",
		"没有文件被上传",
		"上传文件为空",
		"ERROR_TMP_FILE"           => "临时文件错误",
		"ERROR_TMP_FILE_NOT_FOUND" => "找不到临时文件",
		"ERROR_SIZE_EXCEED"        => "文件大小超出网站限制",
		"ERROR_TYPE_NOT_ALLOWED"   => "文件类型不允许",
		"ERROR_CREATE_DIR"         => "目录创建失败",
		"ERROR_DIR_NOT_WRITEABLE"  => "目录没有写权限",
		"ERROR_FILE_MOVE"          => "文件保存时出错",
		"ERROR_FILE_NOT_FOUND"     => "找不到上传文件",
		"ERROR_WRITE_CONTENT"      => "写入文件内容错误",
		"ERROR_UNKNOWN"            => "未知错误",
		"ERROR_DEAD_LINK"          => "链接不可用",
		"ERROR_HTTP_LINK"          => "链接不是http链接",
		"ERROR_HTTP_CONTENTTYPE"   => "链接contentType不正确"
	);

	/**
	 * 构造函数
	 *
	 * @param string $fileField 表单名称
	 * @param array $config 配置项
	 * @param bool $base64 是否解析base64编码，可省略。若开启，则$fileField代表的是base64编码的字符串表单名
	 */
	public function __construct( $fileField, $config, $type = "upload" ) {
		$this->fileField = $fileField;
		$this->config    = $config;
		$this->type      = $type;
		if ( $type == "remote" ) {
			$this->saveRemote();
		} else if ( $type == "base64" ) {
			$this->upBase64();
		} else {
			$this->upFile();
		}

		$this->stateMap['ERROR_TYPE_NOT_ALLOWED'] = iconv( 'unicode', 'utf-8', $this->stateMap['ERROR_TYPE_NOT_ALLOWED'] );
	}

	/**
	 * 上传文件的主处理方法
	 * @return mixed
	 */
	private function upFile() {
		$file = $this->file = $_FILES[ $this->fileField ];
		if ( ! $file ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_FILE_NOT_FOUND" );

			return;
		}
		if ( $this->file['error'] ) {
			$this->stateInfo = $this->getStateInfo( $file['error'] );

			return;
		} else if ( ! file_exists( $file['tmp_name'] ) ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_TMP_FILE_NOT_FOUND" );

			return;
		} else if ( ! is_uploaded_file( $file['tmp_name'] ) ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_TMPFILE" );

			return;
		}

		$this->oriName  = $file['name'];
		$this->fileSize = $file['size'];
		$this->fileType = $this->getFileExt();
		$this->fullName = $this->getFullName();
		$this->filePath = $this->getFilePath();
		$this->fileName = $this->getFileName();
		$dirname        = dirname( $this->filePath );

		//检查文件大小是否超出限制
		if ( ! $this->checkSize() ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_SIZE_EXCEED" );

			return;
		}

		//检查是否不允许的文件格式
		if ( ! $this->checkType() ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_TYPE_NOT_ALLOWED" );

			return;
		}

		//创建目录失败
		if ( ! file_exists( $dirname ) && ! mkdir( $dirname, 0777, true ) ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_CREATE_DIR" );

			return;
		} else if ( ! is_writeable( $dirname ) ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_DIR_NOT_WRITEABLE" );

			return;
		}

		//移动文件
		if ( ! ( move_uploaded_file( $file["tmp_name"], $this->filePath ) && file_exists( $this->filePath ) ) ) { //移动失败
			$this->stateInfo = $this->getStateInfo( "ERROR_FILE_MOVE" );
		} else { //移动成功
			$this->stateInfo = $this->stateMap[0];
		}
	}

	/**
	 * 处理base64编码的图片上传
	 * @return mixed
	 */
	private function upBase64() {
		$base64Data = $_POST[ $this->fileField ];
		$img        = base64_decode( $base64Data );

		$this->oriName  = $this->config['oriName'];
		$this->fileSize = strlen( $img );
		$this->fileType = $this->getFileExt();
		$this->fullName = $this->getFullName();
		$this->filePath = $this->getFilePath();
		$this->fileName = $this->getFileName();
		$dirname        = dirname( $this->filePath );

		//检查文件大小是否超出限制
		if ( ! $this->checkSize() ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_SIZE_EXCEED" );

			return;
		}

		//创建目录失败
		if ( ! file_exists( $dirname ) && ! mkdir( $dirname, 0777, true ) ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_CREATE_DIR" );

			return;
		} else if ( ! is_writeable( $dirname ) ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_DIR_NOT_WRITEABLE" );

			return;
		}

		//移动文件
		if ( ! ( file_put_contents( $this->filePath, $img ) && file_exists( $this->filePath ) ) ) { //移动失败
			$this->stateInfo = $this->getStateInfo( "ERROR_WRITE_CONTENT" );
		} else { //移动成功
			$this->stateInfo = $this->stateMap[0];
		}

	}

	/**
	 * 拉取远程图片
	 * @return mixed
	 */
	private function saveRemote() {
		$imgUrl = htmlspecialchars( $this->fileField );
		$imgUrl = str_replace( "&amp;", "&", $imgUrl );

		//http开头验证
		if ( strpos( $imgUrl, "http" ) !== 0 ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_HTTP_LINK" );

			return;
		}
		//获取请求头并检测死链
		$heads = get_headers( $imgUrl );
		if ( ! ( stristr( $heads[0], "200" ) && stristr( $heads[0], "OK" ) ) ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_DEAD_LINK" );

			return;
		}
		//格式验证(扩展名验证和Content-Type验证)
		$fileType = strtolower( strrchr( $imgUrl, '.' ) );
		if ( ! in_array( $fileType, $this->config['allowFiles'] ) || stristr( $heads['Content-Type'], "image" ) ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_HTTP_CONTENTTYPE" );

			return;
		}

		//打开输出缓冲区并获取远程图片
		ob_start();
		$context = stream_context_create(
			array(
				'http' => array(
					'follow_location' => false // don't follow redirects
				)
			)
		);
		readfile( $imgUrl, false, $context );
		$img = ob_get_contents();
		ob_end_clean();
		preg_match( "/[\/]([^\/]*)[\.]?[^\.\/]*$/", $imgUrl, $m );

		$this->oriName  = $m ? $m[1] : "";
		$this->fileSize = strlen( $img );
		$this->fileType = $this->getFileExt();
		$this->fullName = $this->getFullName();
		$this->filePath = $this->getFilePath();
		$this->fileName = $this->getFileName();
		$dirname        = dirname( $this->filePath );

		//检查文件大小是否超出限制
		if ( ! $this->checkSize() ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_SIZE_EXCEED" );

			return;
		}

		//创建目录失败
		if ( ! file_exists( $dirname ) && ! mkdir( $dirname, 0777, true ) ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_CREATE_DIR" );

			return;
		} else if ( ! is_writeable( $dirname ) ) {
			$this->stateInfo = $this->getStateInfo( "ERROR_DIR_NOT_WRITEABLE" );

			return;
		}

		//移动文件
		if ( ! ( file_put_contents( $this->filePath, $img ) && file_exists( $this->filePath ) ) ) { //移动失败
			$this->stateInfo = $this->getStateInfo( "ERROR_WRITE_CONTENT" );
		} else { //移动成功
			$this->stateInfo = $this->stateMap[0];
		}

	}

	/**
	 * 上传错误检查
	 *
	 * @param $errCode
	 *
	 * @return string
	 */
	private function getStateInfo( $errCode ) {
		return ! $this->stateMap[ $errCode ] ? $this->stateMap["ERROR_UNKNOWN"] : $this->stateMap[ $errCode ];
	}

	/**
	 * 获取文件扩展名
	 * @return string
	 */
	private function getFileExt() {
		return strtolower( strrchr( $this->oriName, '.' ) );
	}

	/**
	 * 重命名文件
	 * @return string
	 */
	private function getFullName() {
		//替换日期事件
		$t      = time();
		$d      = explode( '-', date( "Y-y-m-d-H-i-s" ) );
		$format = $this->config["pathFormat"];
		$format = str_replace( "{yyyy}", $d[0], $format );
		$format = str_replace( "{yy}", $d[1], $format );
		$format = str_replace( "{mm}", $d[2], $format );
		$format = str_replace( "{dd}", $d[3], $format );
		$format = str_replace( "{hh}", $d[4], $format );
		$format = str_replace( "{ii}", $d[5], $format );
		$format = str_replace( "{ss}", $d[6], $format );
		$format = str_replace( "{time}", $t, $format );

		//过滤文件名的非法自负,并替换文件名
		$oriName = substr( $this->oriName, 0, strrpos( $this->oriName, '.' ) );
		$oriName = preg_replace( "/[\|\?\"\<\>\/\*\\\\]+/", '', $oriName );
		$format  = str_replace( "{filename}", $oriName, $format );

		//替换随机字符串
		$randNum = rand( 1, 10000000000 ) . rand( 1, 10000000000 );
		if ( preg_match( "/\{rand\:([\d]*)\}/i", $format, $matches ) ) {
			$format = preg_replace( "/\{rand\:[\d]*\}/i", substr( $randNum, 0, $matches[1] ), $format );
		}

		$ext = $this->getFileExt();

		return $format . $ext;
	}

	/**
	 * 获取文件名
	 * @return string
	 */
	private function getFileName() {
		return substr( $this->filePath, strrpos( $this->filePath, '/' ) + 1 );
	}

	/**
	 * 获取文件完整路径
	 * @return string
	 */
	private function getFilePath() {
		$fullname = $this->fullName;
		$rootPath = $_SERVER['DOCUMENT_ROOT'];

		if ( substr( $fullname, 0, 1 ) != '/' ) {
			$fullname = '/' . $fullname;
		}

		return $rootPath . $fullname;
	}

	/**
	 * 文件类型检测
	 * @return bool
	 */
	private function checkType() {
		return in_array( $this->getFileExt(), $this->config["allowFiles"] );
	}

	/**
	 * 文件大小检测
	 * @return bool
	 */
	private function  checkSize() {
		return $this->fileSize <= ( $this->config["maxSize"] );
	}

	/**
	 * 获取当前上传成功文件的各项信息
	 * @return array
	 */
	public function getFileInfo() {
		return array(
			"state"    => $this->stateInfo,
			"url"      => $this->fullName,
			"title"    => $this->fileName,
			"original" => $this->oriName,
			"type"     => $this->fileType,
			"size"     => $this->fileSize
		);
	}

}