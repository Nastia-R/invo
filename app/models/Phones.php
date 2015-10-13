<?php

use Phalcon\Mvc\Model;

/**
 * Phones
 */
class Phones extends Model
{
	/**
	 * @var integer
	 */
	public $id;

	/**
	 * @var integer
	 */
	public $producer_id;

	/**
	 * @var integer
	 */
	public $operating_system_id;

	/**
	 * @var string
	 */
	public $model;

	/**
	 * @var string
	 */
	public $status;

	/**
	 * @var integer
	 */
	public $user_id;

	/**
	 * Products initializer
	 */
	public function initialize()
	{
		$this->belongsTo('producer_id', 'PhonesProducers', 'id');
		$this->belongsTo('operating_system_id', 'OperatingSystems', 'id');
		$this->belongsTo('user_id', 'Users', 'id');
	}
}