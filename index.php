<?php

require './vendor/autoload.php';

$cfg = require './config.php';
$rcapi = new ResellerClub\Contacts\Search($cfg['userid'], $cfg['apikey']);

$res = $rcapi->customer_id('13095433')
             ->no_of_records('10')
             ->page_no('1')
             ->response();

echo $res."\n";
