<?php

use cls\Farm;

require_once __DIR__ . '/vendor/autoload.php';

$farm = new Farm(15, 7);

echo $farm->answer();