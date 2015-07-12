<?php namespace ResellerClub\Contacts;

use \ResellerClub\ResellerClub;

/**
 * Desc: Adds a Contact to the domain using the details provided.
 * Params:
 *  [name]        Name of the Contact
 *  [company]     Name of the Company
 *  [email]       Email address of the Contact
 *  [address]     First line of address of the Contact
 *  [city]        Name of the City
 *  [country]     Country code as per ISO 3166-1 alpha-2
 *  [zipcode]     ZIP code
 *  [phone_cc]    Telephone number country code
 *  [phone]       Telephone number
 *  [customer_id] The Customer under whom you want to create the Contact
 *  [type]        The Contact Type
 * Return:
 *  Success    Contact Id (Integer) of newly added Contact
 *  Error      A status key with value as ERROR alongwith an error message
 */

class Add extends ResellerClub {
    public function name($value){
        return $this->param('name', $value);
    }

    public function company($value){
        return $this->param('company', $value);
    }

    public function email($value){
        return $this->param('email', $value);
    }

    public function address($value){
        return $this->param('address-line-1', $value);
    }

    public function city($value){
        return $this->param('city', $value);
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

    public function customer_id($value){
        return $this->param('customer-id', $value);
    }

    public function type($value = 'Contact'){
        return $this->param('type', $value);
    }

    public function response(){
        return $this->auth()->post('contacts/add')->result();
    }
}
