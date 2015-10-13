<?php

use Phalcon\Mvc\Model;

class Todo extends Model
{
	/**
	* @var integer
	*/
	public $id;

	/**
	* @var string
	*/
	public $title;

	/**
	* @var string
	*/
	public $description;

	/**
	* @var integer
	*/
	public $conditions;

	/**
	* @var integer
	*/
	public $user_id;

	public function initialize()
    {
        $this->belongsTo("user_id", "Users", "id");
    }

}