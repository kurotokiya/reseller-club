<?php namespace ResellerClub\Customers;

use \ResellerClub\ResellerClub;

/**
 * Desc: Gets the Customer details for the specified Customer Id.
 * Params:
 *  [customer_id] Customer Id of the Customer
 * Return:
 *  Success    Returns a hash map containing the details
 *  Error      A status key with value as ERROR alongwith an error message
 */

class DetailsById extends ResellerClub {
    public function customer_id($value){
        return $this->param('customer-id', $value);
    }

    public function response(){
        return $this->auth()->get('customers/details-by-id')->result();
    }
}
