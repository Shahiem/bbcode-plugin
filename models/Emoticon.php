<?php namespace ShahiemSeymor\Bbcode\Models;

use Model;

class Emoticon extends Model
{

	public $table = 'shahiemseymor_emoticons';
    public $attachOne = [
	    'emoticon' => ['System\Models\File']
	];

    public $rules          = [
        'name'            => 'required',
    ];

    protected $fillable = ['name', 'emoticon', 'notation', 'in_editor', 'in_forum'];

	public static function getEmoctions()
    {
    	
    	$image = Emoticon::get(array('name', 'notation'));
    	$emoticon = array();

    	foreach($image as $fetch)
    	{
    		$emoticon[$fetch->name] = array(':)', ':P');
    	}

    	return $emoticon;

    }

}