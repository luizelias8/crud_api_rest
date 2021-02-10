<?php

namespace Webslesson\Model\Repository;

use Webslesson\Model\Entity\User;

interface IUserRepository
{
	public function create(User $user);

	public function read($id = null);

	public function update(User $user, $id);

	public function delete($id);
}