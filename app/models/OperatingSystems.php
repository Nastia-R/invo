<?php

use Phalcon\Mvc\Model;

/**
 * Phones
 */
class OperatingSystems extends Model
{
	/**
	 * @var integer
	 */
	public $id;

	/**
	 * @var string
	 */
	public $name;

	/**
	 *  OperatingSystems initializer
	 */
	public function initialize()
	{
		$this->hasMany('id', 'Phones', 'operating_system_id');
	}
}