<?php namespace ResellerClub\Customers;

use \ResellerClub\ResellerClub;

/**
 * Desc: Changes the password for the specified Customer.
 * Params:
 *  [customer_id] Customer Id of the Customer whose password needs to be changed
 *  [new_passwd]  New password
 * Return:
 *  Success    true (Boolean)
 *  Error      A status key with value as ERROR alongwith an error message
 */

class ChangePassword extends ResellerClub {
    public function customer_id($value){
        return $this->param('customer-id', $value);
    }

    public function new_passwd($value){
        return $this->param('new-passwd', $value);
    }

    public function response(){
        return $this->auth()->post('customers/change-password')->result();
    }
}
