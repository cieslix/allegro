<?php

$loader = require 'vendor/autoload.php';

ini_set('display_errors', 1);
header('Content-Type: text/html; charset=utf-8');

try {

    $login     = 'ALLEGRO_LOGIN';
    $password  = 'ALLEGRO_PASSWORD';
    $webapiKey = 'ALLEGRO_WEBAPI_KEY'; //http://allegro.pl/myaccount/webapi.php
    $countryId = 1; //POLAND;

    $wsdl    = 'https://webapi.allegro.pl.webapisandbox.pl/service.php?wsdl';  //SANDBOX
    $allegro = new Allegro_Web_Api($wsdl);

    $queryAllSysStatus = $allegro->queryAllSysStatus($webapiKey, $countryId);
    $version           = $queryAllSysStatus->getSysCountryStatus()->getItem();

    $session  = $allegro->login($login, $password, $countryId, $webapiKey, $version[0]->getVerKey());
    $response = $allegro->getMyData($session->getSessionHandlePart());
    print_r($response->getUserData()->getUserEmail());
    echo PHP_EOL;

} catch (Exception $e) {
    print_r($e->getMessage());
}
