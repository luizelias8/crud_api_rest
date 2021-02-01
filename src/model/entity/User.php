<?php

namespace Webslesson\Model\Entity;

class User
{
	private $id;
	private $name;
	private $contactNo;
	private $email;
	private $password;
	private $profile;
	private $type;
	private $createdOn;
	private $status;

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;	
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getContactNo()
	{
		return $this->contactNo;
	}

	public function setContactNo($contactNo)
	{
		$this->contactNo = $contactNo;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getProfile()
	{
		return $this->profile;
	}

	public function setProfile($profile)
	{
		$this->profile = $profile;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setType($type)
	{
		$this->type = $type;
	}

	public function getCreatedOn()
	{
		return $this->createdOn;		
	}

	public function setCreatedOn($createdOn)
	{
		$this->createdOn = $createdOn;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($status)
	{
		$this->status = $status;
	}
}