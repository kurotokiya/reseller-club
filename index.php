<?php

require './vendor/autoload.php';

$cfg = require './config.php';
define('RC_USERID', $cfg['userid']);
define('RC_APIKEY', $cfg['apikey']);

$rcapi = new ResellerClub\Common\Pricing\CustomerPrice();

$res = $rcapi->response();

echo $res."\n";
