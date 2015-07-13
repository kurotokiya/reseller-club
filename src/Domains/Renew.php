<?php namespace ResellerClub\Domains;

use \ResellerClub\ResellerClub;

/**
 * Desc: Renews the specified Domain Registration Order for specified number of years.
 * Params:
 *  [order_id]         Order Id of the Domain Registration Order that you want to Renew.
 *  [years]            Number of years for which you want to Renew this Order.
 *  [exp_date]         Current Expiry Date of the Order in epoch time format.
 *  [purchase_privacy] Renews the Privacy Protection service for the domain name.
 *  [invoice_option]   This will decide how the Customer Invoice will be handled.
 * Return:
 *  Success    A hash map containing the details
 *  Error      A status key with value as ERROR alongwith an error message
 */

class Renew extends ResellerClub {
    public function order_id($value){
        return $this->param('order-id', $value);
    }

    public function years($value){
        return $this->param('years', $value);
    }

    public function exp_date($value){
        return $this->param('exp-date', $value);
    }

    public function purchase_privacy(){
        return $this->param('purchase-privacy', 'true');
    }

    public function invoice_option($value = 'NoInvoice'){
        return $this->param('invoice-option', $value);
    }

    public function response(){
        return $this->auth()->post('domains/renew')->result();
    }
}
