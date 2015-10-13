<?php

use Phalcon\Flash;
use Phalcon\Session;

class PrivatepageController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Private');
        parent::initialize();
    }

    public function indexAction()
    {

    }

}