<?php

$dictionary = array(

 'SXiGatewayRGB_PATTERN_BRIGHTNESS' => 'яркость',
 'SXiGatewayRGB_PATTERN_COLOR' => 'цвет|свет',

 'SXiGatewayRGB_PATTERN_WHITE' => 'бел|белый',
 'SXiGatewayRGB_PATTERN_MAGENTA' => 'перламутр|перламутровый',
 'SXiGatewayRGB_PATTERN_VIOLET' => 'фиолет|фиолетовый',
 'SXiGatewayRGB_PATTERN_INDIGO' => 'индиго',
 'SXiGatewayRGB_PATTERN_BLUE' => 'син|синий',
 'SXiGatewayRGB_PATTERN_CYAN' => 'голуб|голубой',
 'SXiGatewayRGB_PATTERN_GREEN' => 'зелен|зелён|зелёный',
 'SXiGatewayRGB_PATTERN_YELLOW' => 'желт|жёлт|жёлтый',
 'SXiGatewayRGB_PATTERN_ORANGE' => 'оранж|оранжевый',
 'SXiGatewayRGB_PATTERN_RED' => 'красн|красный'

);

foreach ($dictionary as $k => $v) {
 if (!defined('LANG_' . $k)) {
  define('LANG_' . $k, $v);
 }
}
