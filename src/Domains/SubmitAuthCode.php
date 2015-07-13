<?php namespace ResellerClub\Domains;

use \ResellerClub\ResellerClub;

/**
 * Desc: Submit the Authorization Code for a domain name that is currently being transferred in to ResellerClub China.
 * Params:
 *  [order_id]  Order ID of the domain name being transferred in
 *  [auth_code] Domain Secret or Authorization Code, for the domain name being transferred.
 * Return:
 *  Success    success (String)
 *  Error      A status key with value as ERROR alongwith an error message
 */

class SubmitAuthCode extends ResellerClub {
    public function order_id($value){
        return $this->param('order-id', $value);
    }

    public function auth_code($value){
        return $this->param('auth-code', $value);
    }

    public function response(){
        return $this->auth()->get('domains/submit-auth-code')->result();
    }
}
