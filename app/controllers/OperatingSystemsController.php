<?php

use Phalcon\Flash;
use Phalcon\Session;

class OperatingSystemsController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Operating systems');
        parent::initialize();
    }

    public function indexAction()
    {
    }

    public function addAction()
    {
    	$os = new OperatingSystems();
		$os->name = $this->request->getPost('name');
		$os->save();
        $this->flash->success("New OS was added.");
		$this->dispatcher->forward(['action' => 'index']);
    }
}