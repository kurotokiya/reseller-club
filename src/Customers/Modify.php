<?php namespace ResellerClub\Customers;

use \ResellerClub\ResellerClub;

/**
 * Desc: Modifies the Account details of the specified Customer.
 * Params:
 *  [customer_id] Customer Id of the Customer whose details need to be modified
 *  [username]    Username for the Customer Account. Username should be an email address.
 *  [name]        Name of the Customer
 *  [company]     Name of the Customer's company
 *  [address]     Address line 1 of the Customer's address
 *  [city]        City
 *  [state]       State or Not Applicable.
 *  [country]     Country Code as per ISO 3166-1 alpha-2
 *  [zipcode]     ZIP code
 *  [phone_cc]    Telephone number Country Code
 *  [phone]       Phone number
 *  [lang]        Language Code as per ISO
 * Return:
 *  Success    true (Boolean)
 *  Error      A status key with value as ERROR alongwith an error message
 */

class Modify extends ResellerClub {
    public function customer_id($value){
        return $this->param('customer-id', $value);
    }

    public function username($value){
        return $this->param('username', $value);
    }

    public function name($value){
        return $this->param('name', $value);
    }

    public function company($value){
        return $this->param('company', $value);
    }

    public function address($value){
        return $this->param('address-line-1', $value);
    }

    public function city($value){
        return $this->param('city', $value);
    }

    public function state($value){
        return $this->param('state', $value);
    }

    public function country($value = 'CN'){
        return $this->param('country', $value);
    }

    public function zipcode($value){
        return $this->param('zipcode', $value);
    }

    public function phone_cc($value = '86'){
        return $this->param('phone-cc', $value);
    }

    public function phone($value){
        return $this->param('phone', $value);
    }

    public function lang($value = 'zh'){
        return $this->param('lang-pref', $value);
    }

    public function response(){
        return $this->auth()->post('customers/modify')->result();
    }
}
