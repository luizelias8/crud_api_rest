<?php

namespace Webslesson\Controller;

class Controller
{
	public function input()
	{
		$json = file_get_contents("php://input");

		$object = json_decode($json);

		return $object;
	}
}