<?php

$ot = $params['ORIGINAL_OBJECT_TITLE'];
$action = $this->getProperty('actionRGB');

if (isset($params['color']) || isset($params['brightness'])) {

 if (isset($params['color'])) {
  $color = preg_replace('/^#/','', $params['color']);
 } else {
  $color = $this->getProperty('colorSaved');
 }

 if (isset($params['brightness'])) {
  $brightnessHex = dechex($params['brightness']);
  if (strlen($brightnessHex) == '1') {
   $brightnessHex = '0' . $brightnessHex;
  }
 } else {
  $brightnessHex = dechex($this->getProperty('brightnessSaved'));
  if (strlen($brightnessHex) == '1') {
   $brightnessHex = '0' . $brightnessHex;
  }
 }

 $this->setProperty('color', $brightnessHex . $color);

 if (isset($params['timer'])) {
  setTimeout($ot . '_timerAction', 'callMethod("' . $ot . '.action");', $params['timer']);
 }
 return;
} elseif (getGlobal('NobodyHomeMode.active') == 2 && $action) { //Все спят
 $check = 0;
 $color = $this->getProperty('colorSleep');
 if ($color == '') {
  $color = 'cd00ff';
 }
 $brightness = $this->getProperty('brightnessSleep');
 if ($brightness == '') {
  $brightness = 5;
 }
 if ($this->getProperty('color') != $color) {
  $check = 1;
 }
 if ($this->getProperty('brightness') != $brightness) {
  $check = 1;
 }
} elseif (getGlobal('NobodyHomeMode.active') == 0 && $action) { //Кто-то дома
 $check = 0;
 $color = $this->getProperty('colorAtHome');
 if ($color == '') {
  $color = '00ff00';
 }
 $redFound = 0;
 $systemColor = getGlobal('System.stateColor');
 if ($systemColor == 'red') {
  $color = 'ff0000';
  $redFound = 1;
 }
 if (!$redFound) {
  $states = array('System', 'Communication');
  foreach($states as $state) {
   if (getGlobal($state . '.stateColor') == 'yellow') {
    $color = 'ffcd00';
   }
  }
 }
 if ($this->getProperty('color') != $color) {
  $check = 1;
 }
 if (getGlobal('DarknessMode.active')) {
  $brightness = $this->getProperty('brightnessDark');
  if ($brightness == '') {
   $brightness = 50;
  }
 } else {
  $brightness = $this->getProperty('brightnessNotDark');
  if ($brightness == '') {
   $brightness = 10;
  }
 }
 if ($this->getProperty('brightness') != $brightness) {
  $check = 1;
 }
} else {
 $this->callmethod('turnOff');
}

if ($check) {
 $brightnessHex = dechex($brightness);
 if (strlen($brightnessHex) == '1') {
  $brightnessHex = '0' . $brightnessHex;
 }
 $this->setProperty('color', $brightnessHex . $color);
 setTimeout($ot . '_timerCheck', 'callMethod("' . $ot . '.action");', 5);
}
