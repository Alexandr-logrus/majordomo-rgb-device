<?php
if ($this->getProperty('brightnessSaved') == 0) {
 $brightness = 100;
} else {
 $brightness = $this->getProperty('brightnessSaved');
}

$brightnessHex = dechex($brightness);

if (strlen($brightnessHex) == 1) {
 $brightnessHex = '0' . $brightnessHex;
}

if ($this->getProperty('colorSaved') == '') {
 $this->setProperty('color', $brightnessHex . 'ffffff');
} else {
 $this->setProperty('color', $brightnessHex . $this->getProperty('colorSaved'));
}