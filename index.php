<?php

require './vendor/autoload.php';

$cfg = require './config.php';
$rcapi = new ResellerClub\Domains\Register($cfg['userid'], $cfg['apikey']);

$res = $rcapi->domain_name('ubostweb.com')
             ->years('1')
             ->ns('ns1.linode.com')
             ->ns('ns2.linode.com')
             ->ns('ns3.linode.com')
             ->ns('ns4.linode.com')
             ->ns('ns5.linode.com')
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
