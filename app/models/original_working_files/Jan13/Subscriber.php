<?php namespace app\models;

class Subscriber extends \Eloquent {

	/**
     * The table used by this model
     *
     * @var string
     **/
    protected $table = 'subscribers';

    /**
     * The primary key
     *
     * @var string
     **/
    protected $primaryKey = 'id';

    /**
     * The fields that are guarded cannot be mass assigned
     *
     * @var array
     **/
    protected $guarded = array();

    /**
    *  Enabling soft deleting
    *
    *  @var boolean
    **/
     protected $softDelete = true;


}