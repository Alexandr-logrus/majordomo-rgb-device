<?php

$dictionary = array(

 'SXiGatewayRGB_PATTERN_BRIGHTNESS' => 'яркость',
 'SXiGatewayRGB_PATTERN_COLOR' => 'цвет|свет',

 'SXiGatewayRGB_PATTERN_WHITE' => 'бела|беле|бело|белу|белы',
 'SXiGatewayRGB_PATTERN_MAGENTA' => 'перламутровы',
 'SXiGatewayRGB_PATTERN_VIOLET' => 'фиолетовы',
 'SXiGatewayRGB_PATTERN_INDIGO' => 'индиго',
 'SXiGatewayRGB_PATTERN_BLUE' => 'сине|сини|синю|синя',
 'SXiGatewayRGB_PATTERN_CYAN' => 'голубо',
 'SXiGatewayRGB_PATTERN_GREEN' => 'зеленый|зелёный',
 'SXiGatewayRGB_PATTERN_YELLOW' => 'желты|жёлты',
 'SXiGatewayRGB_PATTERN_ORANGE' => 'оранжевы',
 'SXiGatewayRGB_PATTERN_RED' => 'красна|красне|красно|красну|красны'

);

foreach ($dictionary as $k => $v) {
 if (!defined('LANG_' . $k)) {
  define('LANG_' . $k, $v);
 }
}
