<?php

namespace Webslesson\Model\Repository;

use Webslesson\Model\Repository\Repository;
use PDO;
use Webslesson\Model\Entity\User;

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

	public function create(User $user)
	{
		$stmt = $this->query("
			INSERT INTO user(name, contact_no, email, password, profile, type, status, created_on) 
			VALUES(:name, :contact_no, :email, :password, :profile, :type, :status, :created_on)
		", [
			":name" => $user->getName(), 
			":contact_no" => $user->getContactNo(), 
			":email" => $user->getEmail(), 
			":password" => $user->getPassword(), 
			":profile" => $user->getProfile(), 
			":type" => $user->getType(), 
			":status" => $user->getStatus(), 
			":created_on" => $user->getCreatedOn()
		]);
		
		return $stmt->rowCount();
	}

	public function delete($id)
	{
		$stmt = $this->query("DELETE FROM user WHERE id = :id", [":id" => $id]);

		return $stmt->rowCount();
	}
}