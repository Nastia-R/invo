<?php

use Phalcon\Flash;
use Phalcon\Session;

class PhonesProducersController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Phones producers');
        parent::initialize();
    }

    public function indexAction()
    {

    }

    public function addAction()
    {
    	$producers = new PhonesProducers();
		$producers->name = $this->request->getPost('name');
		$producers->save();
        $this->flash->success("New producer was added.");
		$this->dispatcher->forward(['action' => 'index']);
    }
}