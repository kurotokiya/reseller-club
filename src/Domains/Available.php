<?php namespace ResellerClub\Domains;

use \ResellerClub\ResellerClub;

/**
 * Desc: Checks the availability of the specified domain name(s).
 * Params:
 *  [domain_name] Domain name(s) that you need to check the availability for
 *  [tlds]        TLDs for which the domain name availability needs to be checked
 * Return:
 *  Success    A hash map containing domain name availability status for the requested TLDs
 *  Error      A status key with value as ERROR alongwith an error message
 */

class Available extends ResellerClub {
    public function domain_name($value){
        return $this->param('domain-name', $value);
    }

    public function tlds($value){
        return $this->param('tlds', $value);
    }

    public function response(){
        return $this->auth()->get('domains/available')->result();
    }
}
