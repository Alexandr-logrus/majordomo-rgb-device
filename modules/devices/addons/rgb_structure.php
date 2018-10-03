<?php

$this->device_types['rgb'] = array(
    'TITLE'=>"XiGateway",
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SXiGatRGB',
    'PROPERTIES'=>array(
        'color'=>array('DESCRIPTION'=>'Current color','ONCHANGE'=>'colorUpdated','DATA_KEY'=>1),
        'colorSaved'=>array('DESCRIPTION'=>'Saved color'),
        'brightness'=>array('DESCRIPTION'=>'Яркость','DATA_KEY'=>1),
        'action'=>array('DESCRIPTION'=>'','ONCHANGE'=>'action')
    ),
    'METHODS'=>array(
        'colorUpdated'=>array('DESCRIPTION'=>'Color Updated'),
        'setColor'=>array('DESCRIPTION'=>'Color Set'),
        'action'=>array('DESCRIPTION'=>'Action'),
        'turnOn'=>array('DESCRIPTION'=>'RGB turnOn'),
        'turnOff'=>array('DESCRIPTION'=>'RGB turnOff')
    ));
