<?php

namespace Webslesson\Core;

use PDO;

class Connect
{
	private static $instance;

	private function __construct()
	{

	}

	public static function getInstance()
	{
		if (!isset(self::$instance)) {

			self::$instance = new PDO(
				DB_CONFIG["driver"] . ":host=" . DB_CONFIG["host"] . ";dbname=" . DB_CONFIG["dbname"] . ";port=" . DB_CONFIG["port"],
				DB_CONFIG["user"],
				DB_CONFIG["password"],
				DB_CONFIG["options"]
			);

		}

		return self::$instance;
	}
}