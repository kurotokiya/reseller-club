<?php namespace ResellerClub\Customers;

use \ResellerClub\ResellerClub;

/**
 * Desc: Gets the Customer details for the specified Customer Username.
 * Params:
 *  [username] Username of the Customer
 * Return:
 *  Success    Returns a hash map containing the details
 *  Error      A status key with value as ERROR alongwith an error message
 */

class Details extends ResellerClub {
    public function username($value){
        return $this->param('username', $value);
    }

    public function response(){
        return $this->auth()->get('customers/details')->result();
    }
}
