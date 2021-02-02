<?php

namespace Webslesson\Model\Repository;

use Webslesson\Core\Connect;
use PDO;

class Repository
{
	private function setParam($statment, $key, $value)
	{
		$statment->bindParam($key, $value);
	}

	private function setParams($statment, $parameters = [])
	{
		foreach ($parameters as $key => $value) {

			$this->setParam($statment, $key, $value);

		}
	}

	public function query($rawQuery, $params = [])
	{
		$stmt = Connect::getInstance()->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
	}

	public function select($rawQuery, $params = [])
	{
		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}