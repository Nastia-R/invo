<?php

class PortfolioController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('Portfolio');
        parent::initialize();
    }

    public function indexAction()
    {
    	$this-> resizeImage('1.jpg');
    	$this-> resizeImage('2.jpg');
    	$this-> resizeImage('3.jpg');
    }

    public function resizeImage($img)
    {
    	$image = new Phalcon\Image\Adapter\GD("images/".$img);
		$image->resize(600, 300);
		$image->save('images/min/'.$img);
    }
}
