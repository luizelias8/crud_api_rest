<?php

namespace Webslesson\Model\Repository;

use Webslesson\Model\Repository\Repository;
use PDO;

class UserRepository extends Repository
{
	public function read($id = null)
	{
		if ($id) {

			return $this->select("SELECT * FROM user WHERE :id = id", [":id" => $id]);

		} else {

			return $this->select("SELECT * FROM user");

		}		
	}
}