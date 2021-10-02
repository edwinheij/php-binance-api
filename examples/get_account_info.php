<?php

require '../vendor/autoload.php';

// @see home_directory_config.php
// use config from ~/.confg/jaggedsoft/php-binance-api.json
$api = new Binance\API();

$account = $api->account();
print_r($account); 
