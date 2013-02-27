<?php
App::uses('HttpSocket', 'Network/Http');
App::uses('CakeEmail', 'Network/Email');
App::import('Model', 'Users.User');
class AppUser extends User {
	public $useTable = 'users';
	public $alias = 'User';

/**
 * Constructor
 *
 * @param type $id
 * @param type $table
 * @param type $ds
 */
	public function __construct($id = false, $table = null, $ds = null) {
		$this->Socket = new HttpSocket();
		$this->Email = new CakeEmail();
		$this->dev = Configure::read('App.Develop');
		parent::__construct($id, $table, $ds);
	}
/**
 * don't know where else to put this now
 */
	public function getFeedDetails($format = 'xml', $url = null) {
		if ($url) {

		} else {
			$url = 'http://feeds.feedburner.com/hl-devos-votd';
		}
		$response = $this->Socket->get($url);
		$xml = Xml::build($url);
		$item = json_encode($xml->channel->item[0]);
		return $item;
	}
}
