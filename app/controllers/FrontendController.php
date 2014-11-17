<?php

class FrontendController extends BaseController {

	protected function dataApi( $model = null ) {
		$controller = 'App\Modules\Data\Controllers\\' . ( $model ?: $this->modelName() ) . 'Controller';

		return class_exists( $controller ) ? App::make( $controller ) : false;
	}

	public function login() {
		if ( Request::isMethod( 'post' ) ) {
			$account = $this->dataApi( 'User' )->account( Input::get( 'account' ) );
			$posts   = array(
				$account   => Input::get( 'account' ),
				'password' => Input::get( 'password' )
			);
			if ( $this->validPass( $process = $this->dataApi( 'User' )->login( $posts, Input::has( 'remember' ) ) ) ) {
				return Redirect::to( '/' );
			}
			if ( $process ) {
				$process->errors()->add( 'account', $process->errors()->first( $account ) );
			} else {
				$process = new \Illuminate\Support\MessageBag( array( 'sys_error' => 'error' ) );
			}

			return Redirect::guest( 'login' )->withErrors( $process )->withInput( array( 'account' => Input::get( 'account' ) ) );
		}

		return Redirect::guest( 'login' );
	}

	public function register() {
		if ( Request::isMethod( 'post' ) ) {
			$account = $this->dataApi( 'User' )->account( Input::get( 'account' ) );
			$posts   = array(
				$account           => Input::get( 'account' ),
				'password'         => Input::get( 'password' ),
				'password_confirm' => Input::get( 'password_confirm' )
			);
			if ( $this->validPass( $process = $this->dataApi( 'User' )->register( $posts ) ) ) {
				return Redirect::to( '/' );
			}
			if ( $process ) {
				$process->errors()->add( 'account', $process->errors()->first( $account ) );
			} else {
				$process = new \Illuminate\Support\MessageBag( array( 'sys_error' => 'error' ) );
			}

			return Redirect::guest( 'register' )->withErrors( $process )->withInput( array( 'account' => Input::get( 'account' ) ) );
		}

		return Redirect::guest( 'register' );
	}

	public function reset() {
		if ( Input::get( 'token' ) && Request::isMethod( 'post' ) ) {
			$posts = array(
				'password'         => Input::get( 'password' ),
				'password_confirm' => Input::get( 'password_confirm' ),
				'token'            => Input::get( 'token' ),
			);
			if ( $this->validPass( $process = $this->dataApi( 'User' )->reset( $posts ) ) ) {
				return Redirect::to( 'message' )->with( 'message', 'Password Changed' );
			}
			if ( ! $process ) {
				$process = new \Illuminate\Support\MessageBag( array( 'sys_error' => 'error' ) );
			}

			return Redirect::guest( 'reset' )->withErrors( $process );
		}

		return Redirect::guest( 'reset' );
	}

	public function reminder() {
		if ( Request::isMethod( 'post' ) ) {
			$account = $this->dataApi( 'User' )->account( Input::get( 'account' ) );
			$posts   = array(
				$account => Input::get( 'account' )
			);
			if ( $this->validPass( $process = $this->dataApi( 'User' )->reminder( $posts ) ) ) {
				return Redirect::to( 'message' )->with( 'message', 'Login Failed' );
			}
			if ( $process ) {
				$process->errors()->add( 'account', $process->errors()->first( $account ) );
			} else {
				$process = new \Illuminate\Support\MessageBag( array( 'sys_error' => 'error' ) );
			}

			return Redirect::guest( 'reminder' )->withErrors( $process )->withInput( array( 'account' => Input::get( 'account' ) ) );
		}

		return Redirect::guest( 'reminder' );
	}

	public function changePassword() {
		if ( Auth::validate( array(
				'user_name' => Auth::user()->user_name,
				'password'  => Input::get( 'password_old' )
			) ) && Request::isMethod( 'post' )
		) {
			$posts = array(
				'password'         => Input::get( 'password' ),
				'password_confirm' => Input::get( 'password_confirm' ),
				'password_old'     => Input::get( 'password_old' )
			);
			if ( $this->validPass( $process = $this->dataApi( 'User' )->changePassword( $posts ) ) ) {
				return Redirect::to( 'message' )->with( 'message', 'Password Changed' );
			}
			if ( ! $process ) {
				$process = new \Illuminate\Support\MessageBag( array( 'sys_error' => 'error' ) );
			}

			return Redirect::guest( 'changePassword' )->withErrors( $process );
		}

		return Redirect::guest( 'changePassword' );
	}

	public function profile() {
		if ( Request::isMethod( 'post' ) ) {
			$posts = array(
				'password'         => Input::get( 'password' ),
				'password_confirm' => Input::get( 'password_confirm' ),
				'password_old'     => Input::get( 'password_old' )
			);
			if ( $this->validPass( $process = $this->dataApi( 'User' )->profile( $posts ) ) ) {
				return Redirect::to( 'message' )->with( 'message', 'Password Changed' );
			}
			if ( ! $process ) {
				$process = new \Illuminate\Support\MessageBag( array( 'sys_error' => 'error' ) );
			}

			return Redirect::guest( 'profile' )->withErrors( $process );
		}

		return Redirect::guest( 'profile' )->withInput( Auth::user()->toArray() );
	}
}
