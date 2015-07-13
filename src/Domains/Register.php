<?php namespace ResellerClub\Domains;

use \ResellerClub\ResellerClub;

/**
 * Desc: Registers a domain name.
 * Params:
 *  [domain_name]        Domain name that you need to Register.
 *  [years]              Number of years for which you wish to Register this domain name.
 *  [ns]                 The Name Servers of the domain name.
 *  [customer_id]        The Customer for whom you wish to Register this domain name.
 *  [reg_contact_id]     The Registrant Contact of the domain name.
 *  [admin_contact_id]   The Administrative Contact of the domain name.
 *  [tech_contact_id]    The Technical Contact of the domain name.
 *  [billing_contact_id] The Billing Contact of the domain name.
 *  [invoice_option]     This will decide how the Customer Invoice will be handled.
 *  [purchase_privacy]   Adds the Privacy Protection service for the domain name.
 *  [protect_privacy]    Enables / Disables the Privacy Protection setting for the domain name.
 * Return:
 *  Success    A hash map containing the details
 *  Error      A status key with value as ERROR alongwith an error message
 */

class Register extends ResellerClub {
    public function domain_name($value){
        return $this->param('domain-name', $value);
    }

    public function years($value){
        return $this->param('years', $value);
    }

    public function ns($value){
        return $this->param('ns', $value);
    }

    public function customer_id($value){
        return $this->param('customer-id', $value);
    }

    public function reg_contact_id($value){
        return $this->param('reg-contact-id', $value);
    }

    public function admin_contact_id($value){
        return $this->param('admin-contact-id', $value);
    }

    public function tech_contact_id($value){
        return $this->param('tech-contact-id', $value);
    }

    public function billing_contact_id($value){
        return $this->param('billing-contact-id', $value);
    }

    public function invoice_option($value = 'NoInvoice'){
        return $this->param('invoice-option', $value);
    }

    public function purchase_privacy($value = 'false'){
        return $this->param('purchase-privacy', $value);
    }

    public function protect_privacy($value = 'false'){
        return $this->param('protect-privacy', $value);
    }

    public function response(){
        return $this->auth()->post('domains/register')->result();
    }
}
