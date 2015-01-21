<?php namespace app\models;

class SpinBlox_Blog extends \Eloquent {

	/**
     * The table used by this model
     *
     * @var string
     **/
    protected $table = 'spinblox_blog';

    /**
     * The primary key
     *
     * @var string
     **/
    protected $primaryKey = 'blog_id';

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