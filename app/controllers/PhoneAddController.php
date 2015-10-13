<?php

use Phalcon\Flash;
use Phalcon\Session;

class PhoneAddController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Phone add');
        parent::initialize();
    }

    public function indexAction()
    {
    	$producers = PhonesProducers::find();
    	$this->view->producers = $producers;

    	$OS = operatingSystems::find();
    	$this->view->OS = $OS;
    }

    public function addAction()
    {
    	$phones = new Phones();
    	
    	$producer = PhonesProducers::findFirst("name = '" . $this->request->getPost('producer') . "'");
    	$producerId   = $producer->id;
		$phones->producer_id = $producerId;
		
		$OS = OperatingSystems::findFirst("name = '" . $this->request->getPost('OS') . "'");
    	$OSId   = $OS->id;
		$phones->operating_system_id = $OSId;

		$phones->model = $this->request->getPost('model');

		$phones->save();
        $this->flash->success("Phone was successfully added.");
		$this->dispatcher->forward(['action' => 'index']);
    }
}