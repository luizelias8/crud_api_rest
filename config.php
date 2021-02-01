<?php

define("DB_CONFIG", [
	"driver" => "mysql",
	"host" => "localhost",
	"port" => "3306",
	"dbname" => "crud_api_rest",
	"user" => "root",
	"password" => "",
	"options" => [
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
	]
]);
