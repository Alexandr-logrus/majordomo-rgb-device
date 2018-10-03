if (isset($params['color'])) {
 callMethod('Rgb01.setColor', array('color'=> $params['color']));
 if (isset($params['timer'])) {
  setTimeout('xiColorReset', 'runScript(\'gateColorAction\');', $params['timer']);
 }
 //say($params['color']);
 return;
} elseif (getGlobal('NobodyHomeMode.active') == 1) { //Никого нет дома
 $color = '000000';
 if (getGlobal('Rgb01.color') != $color) {
  callMethod('Rgb01.setColor', array('color'=> $color));
  $colorcheck = 1;
 }
 //say($color);
} elseif (getGlobal('NobodyHomeMode.active') == 2) { //Все спят
 $colorcheck = 0;
 $brightcheck = 0;
 $color = 'cd00ff';
 if (getGlobal('Rgb01.color') != $color) {
  callMethod('Rgb01.setColor', array('color'=> $color));
  $colorcheck = 1;
 }
 //say($color);
 if (getGlobal('Rgb01.brightness') != 5) {
  setGlobal('Rgb01.brightness', 5);
  $brightcheck = 1;
 }
} else { //Кто-то дома
 $colorcheck = 0;
 $brightcheck = 0;
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
 if (getGlobal('Rgb01.color') != $color) {
  callMethod('Rgb01.setColor', array('color'=> $color));
  $colorcheck = 1;
 }
 //say($color);
 if (getGlobal('DarknessMode.active')) {
  $brightness = 50;
 } else {
  $brightness = 10;
 }
 if (getGlobal('Rgb01.brightness') != $brightness) {
  setGlobal('Rgb01.brightness', $brightness);
  $brightcheck = 1;
 }
}

if ($colorcheck) {
 setTimeout('xiColorCheck', 'runScript(\'gateColorAction\');', 5);
}
elseif ($brightcheck) {
 setTimeout('xiBrightCheck', 'runScript(\'gateColorAction\');', 5);
}