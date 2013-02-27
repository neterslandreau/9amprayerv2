<?php
App::uses('AppController', 'Controller');
App::import('Model', 'AppUser');
/**
 * Feeds Controller
 *
 * @property Feed $Feed
 */
class FeedsController extends AppController {
/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('AppUser');
	// public $autoRender = false;
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('*');
	}
	public function index() {
	}
	public function get_votd() {
		$votd = $this->AppUser->getFeedDetails();
		$this->set('votd', $votd);
	}
}
