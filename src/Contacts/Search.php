<?php namespace ResellerClub\Contacts;

use \ResellerClub\ResellerClub;

/**
 * Desc: Gets the Contact Details of the Contacts that match the Search criteria.
 * Params:
 *  [customer_id]   The Customer for which you want to get the Contact Details
 *  [no_of_records] Number of Records to be returned
 *  [page_no]       Page Number for which records are required
 * Return:
 *  Success    A hash map containing the details
 *  Error      A status key with value as ERROR alongwith an error message
 */

class Search extends ResellerClub {
    public function customer_id($value){
        return $this->param('customer-id', $value);
    }

    public function no_of_records($value){
        return $this->param('no-of-records', $value);
    }

    public function page_no($value){
        return $this->param('page-no', $value);
    }

    public function response(){
        return $this->auth()->get('contacts/search')->result();
    }
}
