<?php

if (defined('DISABLE_SIMPLE_DEVICES') && DISABLE_SIMPLE_DEVICES==1) return;

//SXiGatewayRGB
$objects = getObjectsByProperty('actionRGB', '=', 1);
$total = count($objects);
for ($i = 0; $i < $total; $i++) {
 callMethod($objects[$i] . '.action');
}
