<?php namespace ResellerClub\Domains;

use \ResellerClub\ResellerClub;

/**
 * Desc: Transfers a domain name.
 * Params:
 *  [domain_name]        Specify the domain name that you want to transfer.
 *  [auth_code]          Authorization Code (a.k.a. Domain Secret) of the domain name that you want to transfer.
 *  [customer_id]        The Customer for whom the Order should be added.
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

class Transfer extends ResellerClub {
    public function domain_name($value){
        return $this->param('domain-name', $value);
    }

    public function auth_code($value){
        return $this->param('auth-code', $value);
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

    public function purchase_privacy(){
        return $this->param('purchase-privacy', 'true');
    }

    public function protect_privacy(){
        return $this->param('protect-privacy', 'true');
    }

    public function response(){
        return $this->auth()->post('domains/transfer')->result();
    }
}
