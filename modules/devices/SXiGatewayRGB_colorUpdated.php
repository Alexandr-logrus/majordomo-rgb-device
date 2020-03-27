<?php
if ($params['NEW_VALUE'] == $params['OLD_VALUE'] || strlen($params['NEW_VALUE']) > 6) return;

if ($params['NEW_VALUE'] != '000000' && $this->getProperty('brightness')) {
 $this->setProperty('colorSaved', $params['NEW_VALUE']);
 if ($this->getProperty('status') != 1) {
  $this->setProperty('status', 1);
 }
} else {
 $this->setProperty('status', 0);
}