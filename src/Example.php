<?php namespace ResellerClub\Example;

use \ResellerClub\ResellerClub;

/**
 * Desc: Description
 * Params:
 *  [param] Desc of Param
 * Return:
 *  Success    
 *  Error      A status key with value as ERROR alongwith an error message
 */

class Example extends ResellerClub {
    public function username($value){
        return $this->param('username', $value);
    }

    public function response(){
        return $this->auth()->get('customers/details')->result();
    }
}
