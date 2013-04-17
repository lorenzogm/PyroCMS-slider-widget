<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Widget_Slider extends Widgets
{
    public $title       = 'Slider';
    public $website     = 'https://github.com/willaser/PyroCMS-slider-widget';
    public $description = 'Slider based in files module and Twitter Bootstrap';
    public $author      = 'Lorenzo García';
    public $version     = '1.0';

    public $fields = array(
        array(
            'field' => 'id',
            'label' => 'ID',
            'rules' => 'required'
            ),
        array(
            'field' => 'folder',
            'label' => 'Folder path: "home/slider"',
            'rules' => 'required'
            )
        );

    public function run($options)
    {
        return $options;
    }

}
