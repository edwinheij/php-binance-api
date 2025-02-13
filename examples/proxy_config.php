<?php

require '../vendor/autoload.php';

$proxyConf = [
  'proto' => 'http',
  'address' => '192.168.1.1',
  'port' => '8080',
  'user' => 'dude',
  'pass' => 'd00d'
];

// @see home_directory_config.php
// use config from ~/.confg/jaggedsoft/php-binance-api.json
$api = new Binance\API("","",["useServerTime"=>false],$proxyConf);

$tickers = $api->prices();
print_r($tickers); // List prices of all symbols

// Get balances for all of your positions, including estimated BTC value
$balances = $api->balances($tickers);
print_r($balances);
echo "BTC owned: ".$balances['BTC']['available'].PHP_EOL;
echo "ETH owned: ".$balances['ETH']['available'].PHP_EOL;
echo "Estimated Value: ".$api->btc_value." BTC".PHP_EOL;

// Getting 24hr ticker price change statistics for a symbol
$prevDay = $api->prevDay("BNBBTC");
print_r($prevDay);
echo "BNB price change since yesterday: ".$prevDay['priceChangePercent']."%".PHP_EOL;
