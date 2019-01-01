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
 } elseif (preg_match('/' . LANG_COLOR . '/uis', $command)) {
  $colors = array(
   'ffffff' => array('белый', 'белой', 'белым', 'белом'),
   'ff0000' => array('красный', 'красной', 'красным', 'красном'),
   '00ff00' => array('зеленый', 'зеленой', 'зеленым', 'зеленом'),
   '0000ff' => array('синий', 'синей', 'синим', 'синем'),
  );
  foreach($colors as $color_code => $color_words) {
   foreach($color_words as $color_word) {
    if(preg_match('/' . $color_word . '/uis', $command)) {
	 $run_code .= "callMethodSafe('$linked_object.setColor', array('color'=> '$color_code'));";
     $processed = 1;
     $reply_confirm = 1;
	 break 2;
	}
   }
  }
 } elseif (preg_match('/яркость|brightness/uis', $command)) {
  if(preg_match('/(?:\s)(\d{1,2}|100)(?:%|\s|$)/uis', $command, $matches)) {
   $run_code .= "setGlobal('$linked_object.brightness', $matches[1]);";
   $processed = 1;
   $reply_confirm = 1;
  }
 }
}
