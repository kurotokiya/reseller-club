<?php namespace ResellerClub\Common\Pricing;

use \ResellerClub\ResellerClub;

/**
 * Desc: Gets the generic Customer Pricing.
 * Params: none
 * Return:
 *  Success    A hash map with the generic Customer Pricing
 *  Error      A status key with value as ERROR alongwith an error message
 */

class CustomerPrice extends ResellerClub {
    public function response(){
        return $this->auth()->get('products/customer-price')->result();
    }
}
