<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;

if ($params['NEW_VALUE'] != '000000') {
 $this->setProperty('colorSaved', $params['NEW_VALUE']);
 $this->setProperty('status', 1);
} else {
 $this->setProperty('status', 0);
}