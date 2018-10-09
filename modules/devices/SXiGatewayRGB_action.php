$ot = $this->object_title;

if (isset($params['color'])) {
 callMethod($ot . '.setColor', array('color'=> $params['color']));
 if (isset($params['timer'])) {
  setTimeout($ot . '_timerAction', 'callMethod("' . $ot . '.action");', $params['timer']);
 }
 return;
} elseif (getGlobal('NobodyHomeMode.active') == 1) { //Никого нет дома
 $check = 0;
 $color = '000000';
 if ($this->getProperty('color') != $color) {
  callMethod($ot . '.setColor', array('color'=> $color));
  $check = 1;
 }
} elseif (getGlobal('NobodyHomeMode.active') == 2) { //Все спят
 $check = 0;
 $color = 'cd00ff';
 if ($this->getProperty('color') != $color) {
  callMethod($ot . '.setColor', array('color'=> $color));
  $check = 1;
 }
 if ($this->getProperty('brightness') != 5) {
  $this->setProperty('brightness', 5);
  $check = 1;
 }
} else { //Кто-то дома
 $check = 0;
 $color = '00ff00';
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
  callMethod($ot . '.setColor', array('color'=> $color));
  $check = 1;
 }
 if (getGlobal('DarknessMode.active')) {
  $brightness = 50;
 } else {
  $brightness = 10;
 }
 if ($this->getProperty('brightness') != $brightness) {
  $this->setProperty('brightness', $brightness);
  $check = 1;
 }
}

if ($check) {
 setTimeout($ot . '_Action', 'callMethod("' . $ot . '.action");', 5);
}