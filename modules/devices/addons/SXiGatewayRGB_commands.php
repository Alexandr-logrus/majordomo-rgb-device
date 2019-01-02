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
   'ffffff' => array('white', 'бела', 'беле', 'бело', 'белу', 'белы'),
   'ff0000' => array('red', 'красна', 'красне', 'красно', 'красну', 'красны'),
   '00ff00' => array('green', 'зелена', 'зелене', 'зелено', 'зелену', 'зелены', 'зелёны'),
   '0000ff' => array('blue', 'сине', 'сини', 'синю', 'синя'),
  );
  foreach($colors as $color_code => $color_words) {
   foreach($color_words as $color_word) {
    if(preg_match('/' . preg_quote($color_word, '/') . '/uis', $command)) {
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
