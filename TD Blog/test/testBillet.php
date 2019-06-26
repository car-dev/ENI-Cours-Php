<?php

include '../config/autoload.php';

$dalBillet = new dalBillet();
$billet = $dalBillet->getBillet(1);

var_dump($billet);