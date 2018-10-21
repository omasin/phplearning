<?php

define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'dbuser');
define('PDO_DSN', 'mysql:host=shintaroh-rds-mysql-001.c43pcgs4eqtc.ap-northeast-1.rds.amazonaws.com;dbname=' . DB_DATABASE);

try {
	// connect
	$db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// insert
	$db->exec("insert into users (name, score) values ('Mr.B', 55)");
	echo "User added.";

	// disconnect
	$db = null;

} catch(PDOException $e) {
	echo $e->getMessage();
	exit;
}
