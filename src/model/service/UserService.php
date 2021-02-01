<?php

namespace Webslesson\Model\Service;

use Webslesson\Model\Entity\User;

class UserService
{
	public function validate(User $user): bool
	{		
		if (empty($user->getName()) || empty($user->getContactNo()) || empty($user->getEmail()) || empty($user->getPassword()) || empty($user->getProfile()) || empty($user->getType())) {
			
			return false;

		}

		return true;
	}
}