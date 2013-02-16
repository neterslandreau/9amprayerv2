<?php
App::uses('UsersController', 'Users.Controller');
class AppUsersController extends UsersController {
/**
 *
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->User = ClassRegistry::init('AppUser');
	}
/**
 *
 */
	protected function _setupAuth() {
		parent::_setupAuth();
		$this->Auth->loginRedirect = array('plugin' => null, 'admin' => false, 'controller' => 'app_users', 'action' => 'login');
	}
/**
 *
 */
	public function render($view = null, $layout = null) {
		if (is_null($view)) {
			$view = $this->action;
		}
		$viewPath = substr(get_class($this), 0, strlen(get_class($this)) - 10);
		if (!file_exists(APP . 'View' . DS . $viewPath . DS . $view . '.ctp')) {
			$this->plugin = 'Users';
		} else {
			$this->viewPath = $viewPath;
		}
		return parent::render($view, $layout);
	}
	public function opauth_complete() {
		$this->autoRender = false;
		debug($this->data);
	}
}
