<?php

$color = $this->getProperty('color');
if ($color != '000000') {
 $this->setProperty('colorSaved', $color);
 $this->setProperty('status', 1);
} else {
 $this->setProperty('status', 0);
}
