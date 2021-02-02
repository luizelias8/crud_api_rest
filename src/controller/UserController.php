<?php

namespace Webslesson\Controller;

use Webslesson\Controller\Controller;
use Webslesson\Controller\IController;
use Webslesson\Model\Repository\UserRepository;

class UserController extends Controller implements IController
{
    public function get($id = null)
    {
        $userRepository = new UserRepository();

        return $userRepository->read($id);
    }
    
    public function post()
    {

    }

    public function put($id)
    {

    }

    public function delete($id)
    {
        
    }
}