<?php namespace ResellerClub\Customers;

use \ResellerClub\ResellerClub;

/**
 * Desc: Creates a Customer Account using the details provided.
 * Params:
 *  [username] Username for the Customer Account. Username should be an email address.
 *  [passwd]   Password for the Customer Account
 *  [name]     Name of the Customer
 *  [company]  Name of the Customer's company
 *  [address]  Address line 1 of the Customer's address
 *  [city]     City
 *  [state]    State or Not Applicable.
 *  [country]  Country Code as per ISO 3166-1 alpha-2
 *  [zipcode]  ZIP code
 *  [phone_cc] Telephone number Country Code
 *  [phone]    Phone number
 *  [lang]     Language Code as per ISO
 * Return:
 *  Success    Customer ID (Integer) of the newly added Customer
 *  Error      A status key with value as ERROR alongwith an error message
 */

class Signup extends ResellerClub {
    public function username($value){
        return $this->param('username', $value);
    }

    public function passwd($value = null){
        $value = !$value ? substr(md5(rand(1000,9999)), 8, 10).rand(10000,99999) : $value;
        return $this->param('passwd', $value);
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
        return $this->auth()->post('customers/signup')->result();
    }
}
