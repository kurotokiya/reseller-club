<?php namespace ResellerClub\Domains;

use \ResellerClub\ResellerClub;

/**
 * Desc: Checks if a transfer request is valid for the specified domain name.
 * Params:
 *  [domain_name] Domain name for which you want to check if the transfer request is valid.
 * Return:
 *  Success    Returns true (String) if the transfer request is valid. Returns false otherwise.
 *  Error      A status key with value as ERROR alongwith an error message
 */

class ValidateTransfer extends ResellerClub {
    public function domain_name($value){
        return $this->param('domain-name', $value);
    }

    public function response(){
        return $this->auth()->get('domains/validate-transfer')->result();
    }
}
