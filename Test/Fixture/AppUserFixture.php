<?php
/**
 * UserFixture
 *
 */
class AppUserFixture extends CakeTestFixture {
	public $name = 'User';
	public $useTable = 'users';
/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'slug' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password_token' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email_verified' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'email_token' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email_token_expires' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'tos' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'last_login' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'last_action' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'is_admin' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'role' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'BY_USERNAME' => array('column' => 'username', 'unique' => 0),
			'BY_EMAIL' => array('column' => 'email', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**`
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '4fe344c1-e450-42a8-b55a-6b13f084f5a7',
			'username' => 'knuckles',
			'slug' => 'knuckles',
			'password' => '627aa44e01ac515838e14f99f71f74ed8ca67cd9',
			'password_token' => null,
			'email' => 'knuckles@think-knot.com',
			'email_verified' => 1,
			'email_token' => null,
			'email_token_expires' => null,
			'tos' => 1,
			'active' => 1,
			'last_login' => '2012-08-24 09:20:22',
			'last_action' => null,
			'is_admin' => 0,
			'role' => null,
			'created' => '2012-06-21 11:58:57',
			'modified' => '2012-08-24 09:20:22'
		),
		array(
			'id' => '50354875-a0a0-46be-89f7-1799f084f5a7',
			'username' => 'remoteuser',
			'slug' => 'remoteuser',
			'password' => '627aa44e01ac515838e14f99f71f74ed8ca67cd9',
			'password_token' => null,
			'email' => 'remote@think-knot.com',
			'email_verified' => 0,
			'email_token' => null,
			'email_token_expires' => null,
			'tos' => 1,
			'active' => 1,
			'last_login' => null,
			'last_action' => null,
			'is_admin' => 0,
			'role' => 'registered',
			'created' => '2012-08-22 17:00:37',
			'modified' => '2012-08-22 17:00:37'
		),
		array(
			'id' => '5048a0c0-671c-48f3-aa83-221ef084f5a7',
			'username' => 'knucklesknumbskull',
			'slug' => 'remoteuser',
			'password' => '627aa44e01ac515838e14f99f71f74ed8ca67cd9',
			'password_token' => null,
			'email' => 'knotions@think-knot.com',
			'email_verified' => 0,
			'email_token' => null,
			'email_token_expires' => null,
			'tos' => 1,
			'active' => 1,
			'last_login' => null,
			'last_action' => null,
			'is_admin' => 0,
			'role' => 'registered',
			'created' => '2012-08-22 17:00:37',
			'modified' => '2012-08-22 17:00:37'
		),
	);

}
