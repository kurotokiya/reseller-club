<?php

require './vendor/autoload.php';

$cfg = require './config.php';

/*
$rcapi = new ResellerClub\Domains\Renew($cfg['userid'], $cfg['apikey']);
$res = $rcapi->order_id('61400152')
             ->years('1')
             ->exp_date('1490842082')
             ->invoice_option()
             ->response();
*/
/*
$rcapi = new ResellerClub\Domains\Search($cfg['userid'], $cfg['apikey']);
$res = $rcapi->no_of_records('10')
             ->page_no('1')
             ->response();
*/

echo $res."\n";
