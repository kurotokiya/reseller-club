<?php

require './vendor/autoload.php';

$cfg = require './config.php';

$rcapi = new ResellerClub\ResellerClub($cfg['userid'], $cfg['apikey']);

$res = $rcapi->auth()
             ->param('domain-name', 'tokiya')
             ->param('domain-name', 'sorahost')
             ->param('tlds', 'com')
             ->param('tlds', 'me')
             ->get('domains/available')
             ->result();

echo $res."\n";
