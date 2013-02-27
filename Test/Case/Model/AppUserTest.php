<?php
App::uses('AppUser', 'Model');

/**
 * AppUser Test Case
 *
 */
class AppUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		// 'app.app_user', 'app.user_detail', 'plugin.tags.tag'
		'app.app_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AppUser = ClassRegistry::init('AppUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AppUser);

		parent::tearDown();
	}
/**
 * test instance
 * 
 * @return void
 */
 	public function testInstance() {
 		$this->assertIsA($this->AppUser, 'AppUser');
 	}

/**
 * testGetFeedDetails method
 *
 * @return void
 */
	public function testGetFeedDetails() {
		$response = $this->AppUser->getFeedDetails();
		$jresponse = json_decode($response);
		debug($jresponse->title);
	}

}
