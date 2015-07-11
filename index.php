<?php

require './vendor/autoload.php';

$rcapi = new ResellerClub\ResellerClub('606194','Ac6oAXyHLQAqPJv97sG6nsnfyLkSi2cG');

$res = $rcapi->auth()
             ->param('domain-name', 'tokiya')
             ->param('domain-name', 'sorahost')
             ->param('tlds', 'com')
             ->param('tlds', 'me')
             ->get('domains/available')
             ->result();

echo $res."\n";
