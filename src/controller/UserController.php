<?php

namespace Webslesson\Controller;

use Webslesson\Controller\Controller;
use Webslesson\Controller\IController;
use Webslesson\Model\Repository\UserRepository;
use Webslesson\Model\Entity\User;
use Webslesson\Model\Service\UserService;

class UserController extends Controller implements IController
{
    public function get($id = null)
    {
        $userRepository = new UserRepository();

        return $userRepository->read($id);
    }
    
    public function post()
    {
        $input = $this->input();

        $user = new User();

        $user->setName($input->name);
        $user->setContactNo($input->contact_no);
        $user->setEmail($input->email);
        $user->setPassword($input->password);
        $user->setProfile($input->profile);
        $user->setType($input->type);
        $user->setCreatedOn($input->created_on);
        $user->setStatus($input->status);

        $userService = new UserService();

        if ($userService->validate($user)) {

            $userRepository = new UserRepository();

            return $userRepository->create($user);

        }
    }

    public function put($id)
    {

    }

    public function delete($id)
    {
        
    }
}