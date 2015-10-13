<?php

use Phalcon\Flash;
use Phalcon\Session;

class PhonesController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('View phones list');
        parent::initialize();
    }

    public function indexAction()
    {
    	$phones = Phones::find();
        $this->view->phones = $phones;
        $this->view->user_id = $this->getUserId();
    }

    public function reserveAction($phoneId)
    {
        $phone = Phones::findFirst('id ="'.$phoneId.'"');
        $phone->user_id = $this->getUserId();
        $phone->status = 'Not available';
        $phone->save();
        $this->dispatcher->forward(['action' => 'index']);
    }

    public function getUserId()
    {
        $sessionAuth = $this->session->get('auth');
        $userId = $sessionAuth['id'];
        return $userId;
    }

    public function cancelReservationAction($phoneId)
    {
        $phone = Phones::findFirst('id ="'.$phoneId.'"');
        $phone->user_id = 0;
        $phone->status = 'Available';
        $phone->save();
        $this->dispatcher->forward(['action' => 'index']);
    }
}