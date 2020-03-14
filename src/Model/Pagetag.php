<?php namespace Mobileia\Metatags\Model;

/**
 * Description of CacheInter
 *
 * @author matiascamiletti
 */
class Pagetag extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'pagetags';
    
    protected $casts = ['tags' => 'array'];
    
    public $timestamps = false;
}