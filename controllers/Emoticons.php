<?php namespace ShahiemSeymor\Bbcode\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
/**
 * Bbcode Back-end Controller
 */
class Emoticons extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('ShahiemSeymor.Bbcode', 'bbcode', 'bbcode');
    }
}