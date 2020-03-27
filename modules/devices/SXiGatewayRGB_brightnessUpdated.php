<?php
if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;

if ($params['NEW_VALUE'] != '0' && $this->getProperty('color') != '000000') {
 $this->setProperty('brightnessSaved', $params['NEW_VALUE']);
 if ($this->getProperty('status') != 1) {
  $this->setProperty('status', 1);
 }
} else {
 $this->setProperty('status', 0);
}