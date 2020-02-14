<?php

$dictionary = array(

 'SXiGatewayRGB_PATTERN_BRIGHTNESS' => 'brighness',
 'SXiGatewayRGB_PATTERN_COLOR' => 'color',

 'SXiGatewayRGB_PATTERN_WHITE' => 'white',
 'SXiGatewayRGB_PATTERN_MAGENTA' => 'magenta',
 'SXiGatewayRGB_PATTERN_VIOLET' => 'violet',
 'SXiGatewayRGB_PATTERN_INDIGO' => 'indigo',
 'SXiGatewayRGB_PATTERN_BLUE' => 'blue',
 'SXiGatewayRGB_PATTERN_CYAN' => 'cyan',
 'SXiGatewayRGB_PATTERN_GREEN' => 'green',
 'SXiGatewayRGB_PATTERN_YELLOW' => 'yellow',
 'SXiGatewayRGB_PATTERN_ORANGE' => 'orange',
 'SXiGatewayRGB_PATTERN_RED' => 'red'

);

foreach ($dictionary as $k => $v) {
 if (!defined('LANG_' . $k)) {
  @define('LANG_' . $k, $v);
 }
}
