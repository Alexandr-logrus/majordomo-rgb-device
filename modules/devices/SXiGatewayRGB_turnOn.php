<?php

$colorSaved = $this->getProperty('colorSaved');

if (isset($colorSaved) && $colorSaved != '000000') {
 $this->setProperty('color', $colorSaved);
} else {
 $this->setProperty('color', 'ffffff');
}
