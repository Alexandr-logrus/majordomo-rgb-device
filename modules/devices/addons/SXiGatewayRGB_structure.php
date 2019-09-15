<?php

$this->device_types['rgbgt'] = array(
    'TITLE'=>'XiGateway',
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SXiGatewayRGB',
    'PROPERTIES'=>array(
        'color'=>array('DESCRIPTION'=>'Current color','ONCHANGE'=>'colorUpdated','DATA_KEY'=>1),
        'colorSaved'=>array('DESCRIPTION'=>'Saved color'),
        'colorSleep'=>array('DESCRIPTION'=>'Цвет при спят','_CONFIG_TYPE'=>'num'),
        'colorAtHome'=>array('DESCRIPTION'=>'Цвет при кто-то дома','_CONFIG_TYPE'=>'num'),

        'brightness'=>array('DESCRIPTION'=>'Current brightness','DATA_KEY'=>1),
        'brightnessSaved'=>array('DESCRIPTION'=>'Saved brightness'),
        'brightnessSleep'=>array('DESCRIPTION'=>'Яркость при спят','_CONFIG_TYPE'=>'num'),
        'brightnessDark'=>array('DESCRIPTION'=>'Яркость когда темно','_CONFIG_TYPE'=>'num'),
        'brightnessNotDark'=>array('DESCRIPTION'=>'Яркость когда светло','_CONFIG_TYPE'=>'num'),

        'actionRGB'=>array('DESCRIPTION'=>'Управлять цветом и яркостью из режимов','_CONFIG_TYPE'=>'yesno','ONCHANGE'=>'action')
    ),
    'METHODS'=>array(
        'colorUpdated'=>array('DESCRIPTION'=>'Color Updated'),
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

@include_once(ROOT . 'languages/SXiGatewayRGB_' . SETTINGS_SITE_LANGUAGE . '.php');
@include_once(ROOT . 'languages/SXiGatewayRGB_default' . '.php');
