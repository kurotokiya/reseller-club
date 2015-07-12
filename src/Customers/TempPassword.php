<?php namespace ResellerClub\Customers;

use \ResellerClub\ResellerClub;

/**
 * Desc: Generates a temporary password for the specified Customer. The generated password is valid only for 3 days.
 * Params:
 *  [customer_id] Customer Id of the Customer for whom a temporary password needs to be generated
 * Return:
 *  Success    A temporary password (String) for the specified Customer
 *  Error      A status key with value as ERROR alongwith an error message
 */

class TempPassword extends ResellerClub {
    public function customer_id($value){
        return $this->param('customer-id', $value);
    }

    public function response(){
        return $this->auth()->get('customers/temp-password')->result();
    }
}
