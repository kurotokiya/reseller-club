<?php namespace ResellerClub\Contacts;

use \ResellerClub\ResellerClub;

/**
 * Desc: Gets the details for the specified Contact.
 * Params:
 *  [contact_id] The Contact Id for which details are required
 * Return:
 *  Success    A hash map containing the details
 *  Error      A status key with value as ERROR alongwith an error message
 */

class Details extends ResellerClub {
    public function contact_id($value){
        return $this->param('contact-id', $value);
    }

    public function response(){
        return $this->auth()->get('contacts/details')->result();
    }
}
