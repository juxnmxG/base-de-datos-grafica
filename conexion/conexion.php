<?php

require_once '../vendor/autoload.php';

use Neoxygen\NeoClient\ClientBuilder;

$connection = ClientBuilder::create()
	  ->addConnection('default', 'http', 'localhost', 7474)
	  ->setAutoFormatResponse(true)
	  ->build();
?>
