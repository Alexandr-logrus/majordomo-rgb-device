<?php

$this->device_types['rgb'] = array(
    'TITLE'=>"XiGateway",
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SXiGatewayRGB',
    'PROPERTIES'=>array(
        'color'=>array('DESCRIPTION'=>'Current color','ONCHANGE'=>'colorUpdated','DATA_KEY'=>1),
        'colorSaved'=>array('DESCRIPTION'=>'Saved color'),
        'brightness'=>array('DESCRIPTION'=>'Яркость','DATA_KEY'=>1),
        'actionRGB'=>array('DESCRIPTION'=>'Управлять цветом и яркостью из режимов','_CONFIG_TYPE'=>'yesno')
    ),
    'METHODS'=>array(
        'colorUpdated'=>array('DESCRIPTION'=>'Color Updated'),
        'setColor'=>array('DESCRIPTION'=>'Color Set'),
        'action'=>array('DESCRIPTION'=>'Action'),
        'turnOn'=>array('DESCRIPTION'=>'RGB turnOn'),
        'turnOff'=>array('DESCRIPTION'=>'RGB turnOff')
    ),
    'INJECTS'=>array(
        'OperationalModes'=>array(
            'System.stateChanged'=>'SXiGatewayRGB_injects',
            'Communication.stateChanged'=>'SXiGatewayRGB_injects',
            'NobodyHomeMode.modeChanged'=>'SXiGatewayRGB_injects',
            'DarknessMode.modeChanged'=>'SXiGatewayRGB_injects')
    )
);
