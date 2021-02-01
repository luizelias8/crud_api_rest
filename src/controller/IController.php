<?php

namespace Webslesson\Controller;

interface IController
{
	public function get($id = null);

	public function post();

	public function put($id);

	public function delete($id);
}