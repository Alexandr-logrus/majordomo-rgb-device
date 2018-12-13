<?php

if (isset($params['color']) == 0) return;

$color = strtolower($params['color']);
$color = preg_replace('/^#/','',$color);
$this->setProperty('color', $color);
