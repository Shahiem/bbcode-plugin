<?php namespace ShahiemSeymor\Bbcode\Components;

use Cms\Classes\ComponentBase;

class Wysiwyg extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Wysiwyg BBcode editor',
            'description' => 'Implements a Wysiwyg editor.'
        ];
    }

    public function defineProperties()
    {
        return [
            'toolbar' => [
                 'title'             => 'Toolbar',
                 'description'       => 'Enabled BBcodes',
                 'default'           => 'bold,italic,underline,strike,sup,sub,|,img,video,link,|,bullist,numlist,|,fontcolor,fontsize,fontfamily,|, justifyleft, justifycenter,justifyright,|, quote,code,table,removeFormat',
                 'type'              => 'string',
            ]
        ];
    }

    public function onRun()
    {
        $this->addCss('/plugins/shahiemseymor/bbcode/assets/css/default/wbbtheme.css');
        $this->addJs('/plugins/shahiemseymor/bbcode/assets/js/jquery.wysibb.min.js');
    }

    public function onRender()
    {
        $this->page['toolbar'] = $this->property('toolbar');
        $this->page['resize_maxheight']  = $this->property('resize_maxheight');
    }

}