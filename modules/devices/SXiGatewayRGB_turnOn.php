<?php

$colorSaved = $this->getProperty('colorSaved');
$brightnessHex = dechex($this->getProperty('brightnessSaved'));

if (strlen($brightnessHex) == '1') {
 $brightnessHex = '0' . $brightnessHex;
}

if (isset($colorSaved) && $colorSaved != '000000') {
 $this->setProperty('color', $brightnessHex . $colorSaved);
} else {
 $this->setProperty('color', $brightnessHex . 'ffffff');
}
