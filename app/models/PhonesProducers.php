<?php

use Phalcon\Mvc\Model;

/**
 * Phones
 */
class PhonesProducers extends Model
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
	 * Products initializer
	 */
	public function initialize()
	{
		$this->hasMany('id', 'Phones', 'producer_id');
	}
}