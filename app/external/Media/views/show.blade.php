<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<style type="text/css">
	div#ue-editor{
		width:100%;
	}
	#ue-editor-btns div.btn-group{
		margin: 5px 0 0 5px;
	}
</style>
<div id="ue-editor">
	<script id="editor" type="text/plain" name="{{ $name }}" style="width:100%;height:500px;">
		{{ $content }}
	</script>
</div>

{{--<div id="ue-editor-btns" class="btn-toolbar" role="toolbar">--}}
{{--<div id="btns" class="btn-group btn-group-sm" role="group">--}}
		{{--<div class="btn btn-default" onclick="getAllHtml()">获得整个html的内容</div>--}}
		{{--<div class="btn btn-default" onclick="getContent()">获得内容</div>--}}
		{{--<div class="btn btn-default" onclick="setContent()">写入内容</div>--}}
		{{--<div class="btn btn-default" onclick="setContent(true)">追加内容</div>--}}
		{{--<div class="btn btn-default" onclick="getContentTxt()">获得纯文本</div>--}}
		{{--<div class="btn btn-default" onclick="getPlainTxt()">获得带格式的纯文本</div>--}}
		{{--<div class="btn btn-default" onclick="hasContent()">判断是否有内容</div>--}}
		{{--<div class="btn btn-default" onclick="setFocus()">使编辑器获得焦点</div>--}}
		{{--<div class="btn btn-default" onmousedown="isFocus(event)">编辑器是否获得焦点</div>--}}
		{{--<div class="btn btn-default" onmousedown="setblur(event)" >编辑器失去焦点</div>--}}
{{--</div>--}}
{{--<div class="btn-group btn-group-sm" role="group">--}}
	{{--<div class="btn btn-default" onclick="getText()">获得当前选中的文本</div>--}}
	{{--<div class="btn btn-default" onclick="insertHtml()">插入给定的内容</div>--}}
	{{--<div class="btn btn-default" id="enable" onclick="setEnabled()">可以编辑</div>--}}
	{{--<div class="btn btn-default" onclick="setDisabled()">不可编辑</div>--}}
	{{--<div class="btn btn-default" onclick=" UE.getEditor('editor').setHide()">隐藏编辑器</div>--}}
	{{--<div class="btn btn-default" onclick=" UE.getEditor('editor').setShow()">显示编辑器</div>--}}
{{--</div>--}}
{{--<div class="btn-group btn-group-sm" role="group">--}}
	{{--<div class="btn btn-default" onclick="createEditor()"> 创建编辑器</div>--}}
	{{--<div class="btn btn-default" onclick="deleteEditor()"> 删除编辑器</div>--}}
{{--</div>--}}
{{--</div>--}}
<script type="text/javascript">

	dumpScripts.s6 = function() {
		//实例化编辑器
		//建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
		var ue = UE.getEditor('editor', {enterTag:''});
		ue.ready(function() {
			ue.execCommand('serverparam', {{ json_encode($relates) }} );
		});
	};
//
//	function isFocus(e) {
//		alert(UE.getEditor('editor').isFocus());
//		UE.dom.domUtils.preventDefault(e)
//	}
//
//	function setblur(e) {
//		UE.getEditor('editor').blur();
//		UE.dom.domUtils.preventDefault(e)
//	}
//
//	function insertHtml() {
//		var value = prompt('插入html代码', '');
//		UE.getEditor('editor').execCommand('insertHtml', value)
//	}
//
//	function createEditor() {
//		enableBtn();
//		UE.getEditor('editor');
//	}
//
//	function getAllHtml() {
//		alert(UE.getEditor('editor').getAllHtml())
//	}
//
//	function getContent() {
//		var arr = [];
//		arr.push("使用editor.getContent()方法可以获得编辑器的内容");
//		arr.push("内容为：");
//		arr.push(UE.getEditor('editor').getContent());
//		alert(arr.join("\n"));
//	}
//
//	function getPlainTxt() {
//		var arr = [];
//		arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
//		arr.push("内容为：");
//		arr.push(UE.getEditor('editor').getPlainTxt());
//		alert(arr.join('\n'))
//	}
//
//	function setContent(isAppendTo) {
//		var arr = [];
//		arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
//		UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
//		alert(arr.join("\n"));
//	}
//
//	function setDisabled() {
//		UE.getEditor('editor').setDisabled('fullscreen');
//		disableBtn("enable");
//	}
//
//	function setEnabled() {
//		UE.getEditor('editor').setEnabled();
//		enableBtn();
//	}
//
//	function getText() {
//		//当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
//		var range = UE.getEditor('editor').selection.getRange();
//		range.select();
//		var txt = UE.getEditor('editor').selection.getText();
//		alert(txt)
//	}
//
//	function getContentTxt() {
//		var arr = [];
//		arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
//		arr.push("编辑器的纯文本内容为：");
//		arr.push(UE.getEditor('editor').getContentTxt());
//		alert(arr.join("\n"));
//	}
//
//	function hasContent() {
//		var arr = [];
//		arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
//		arr.push("判断结果为：");
//		arr.push(UE.getEditor('editor').hasContents());
//		alert(arr.join("\n"));
//	}
//
//	function setFocus() {
//		UE.getEditor('editor').focus();
//	}
//
//	function deleteEditor() {
//		disableBtn();
//		UE.getEditor('editor').destroy();
//	}
//
//	function disableBtn(str) {
//		var div = document.getElementById('btns');
//		var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
//		for (var i = 0, btn; btn = btns[i++];) {
//			if (btn.id == str) {
//				UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
//			} else {
//				btn.setAttribute("disabled", "true");
//			}
//		}
//	}
//
//	function enableBtn() {
//		var div = document.getElementById('btns');
//		var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
//		for (var i = 0, btn; btn = btns[i++];) {
//			UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
//		}
//	}


</script>