<?php

require './vendor/autoload.php';

$cfg = require './config.php';
define('RC_USERID', $cfg['userid']);
define('RC_APIKEY', $cfg['apikey']);

$rcapi = new kurotokiya\ResellerClub\Common\Pricing\CustomerPrice($cfg['userid'], $cfg['apikey']);

$res = $rcapi->response();

echo $res."\n";
