<?php namespace ResellerClub\Contacts;

use \ResellerClub\ResellerClub;

/**
 * Desc: Deletes the specified Contact.
 * Params:
 *  [contact_id] The Contact that you want to delete
 * Return:
 *  Success    A hash map containing the details
 *  Error      A status key with value as ERROR alongwith an error message
 */

class Delete extends ResellerClub {
    public function contact_id($value){
        return $this->param('contact-id', $value);
    }

    public function response(){
        return $this->auth()->post('contacts/delete')->result();
    }
}
