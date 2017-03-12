<?php

namespace AppBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;

class ApiController extends FOSRestController
{

    public function getUserAction()
    {
        $view = $this->view($this->getUser());
        return $this->handleView($view);
    }

    public function getUsersAction()
    {
        $users = [];
        $users[] = $this->getUser();
        $users[] = $this->getUser();
        $users[] = $this->getUser();

        $view = $this->view($users);
        return $this->handleView($view);
    }
}