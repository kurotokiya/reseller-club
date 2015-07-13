<?php

require './vendor/autoload.php';

$cfg = require './config.php';
$rcapi = new ResellerClub\Domains\Register($cfg['userid'], $cfg['apikey']);

$res = $rcapi->domain_name('ubo.pw')
             ->years('1')
             ->ns('f1g1ns1.dnspod.net')
             ->ns('f1g1ns2.dnspod.net')
             ->customer_id('13095433')
             ->reg_contact_id('44860833')
             ->admin_contact_id('44860833')
             ->tech_contact_id('44860833')
             ->billing_contact_id('44860833')
             ->invoice_option()
             ->purchase_privacy('true')
             ->protect_privacy('true')
             ->response();

echo $res."\n";
