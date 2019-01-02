<?php

if ($device_type == 'rgbgt') {
 if (preg_match('/' . LANG_DEVICES_PATTERN_TURNON . '/uis', $command)) {
  sayReplySafe(LANG_TURNING_ON . ' ' . $device_title . $add_phrase, 2);
  $run_code .= "callMethodSafe('$linked_object.turnOn');";
  $opposite_code .= "callMethodSafe('$linked_object.turnOff');";
  $processed = 1;
  //$reply_confirm = 1;
 } elseif (preg_match('/' . LANG_DEVICES_PATTERN_TURNOFF . '/uis', $command)) {
  sayReplySafe(LANG_TURNING_OFF . ' ' . $device_title . $add_phrase, 2);
  $run_code .= "callMethodSafe('$linked_object.turnOff');";
  $opposite_code .= "callMethodSafe('$linked_object.turnOn');";
  $processed = 1;
  //$reply_confirm = 1;
 } elseif (preg_match('/' . LANG_SXiGatewayRGB_PATTERN_COLOR . '/uis', $command)) {
  $colors = array(
   'ffffff' => LANG_SXiGatewayRGB_PATTERN_WHITE,
   'ff00ff' => LANG_SXiGatewayRGB_PATTERN_MAGENTA,
   '9400d3' => LANG_SXiGatewayRGB_PATTERN_VIOLET,
   '4b0082' => LANG_SXiGatewayRGB_PATTERN_INDIGO,
   '0000ff' => LANG_SXiGatewayRGB_PATTERN_BLUE,
   '00ffff' => LANG_SXiGatewayRGB_PATTERN_CYAN,
   '00ff00' => LANG_SXiGatewayRGB_PATTERN_GREEN,
   'ffff00' => LANG_SXiGatewayRGB_PATTERN_YELLOW,
   'ff7f00' => LANG_SXiGatewayRGB_PATTERN_ORANGE,
   'ff0000' => LANG_SXiGatewayRGB_PATTERN_RED
  );
  foreach($colors as $color_code => $color_words) {
   if(preg_match('/' . $color_words . '/uis', $command)) {
    //$run_code .= "setGlobal('$linked_object.color', $color_code);";
    $run_code .= "callMethodSafe('$linked_object.setColor', array('color'=> '$color_code'));";
    $processed = 1;
    $reply_confirm = 1;
    break;
   }
  }
 } elseif (preg_match('/' . LANG_SXiGatewayRGB_PATTERN_BRIGHTNESS . '/uis', $command)) {
  if(preg_match('/(?:\s)(\d{1,2}|100)(?:%|\s|$)/uis', $command, $matches)) {
   $run_code .= "setGlobal('$linked_object.brightness', $matches[1]);";
   $processed = 1;
   $reply_confirm = 1;
  }
 }
}
