<?php namespace ResellerClub\Domains;

use \ResellerClub\ResellerClub;

/**
 * Desc: Gets a list of Domain Registration Orders matching the search criteria, along with the details.
 * Params:
 *  (no_of_records) Number of Orders to be fetched. This should be a value between 10 to 500.
 *  (page_no)       Page number for which details are to be fetched
 *  [order_id]      Order Id(s) of the Domain Registration Order(s) whose details need to be fetched
 *  [customer_id]   Customer Id(s) whose Orders need to be fetched
 *  [domain_name]   Name of the Domain
 * Return:
 *  Success    A hash map containing the details of the Domain Registration Orders which match the search criteria
 *  Error      A status key with value as ERROR alongwith an error message
 */

class Search extends ResellerClub {
    public function no_of_records($value){
        return $this->param('no-of-records', $value);
    }

    public function page_no($value){
        return $this->param('page-no', $value);
    }

    public function order_id($value){
        return $this->param('order-id', $value);
    }

    public function customer_id($value){
        return $this->param('customer-id', $value);
    }

    public function domain_name($value){
        return $this->param('domain-name', $value);
    }

    public function response(){
        return $this->auth()->get('domains/search')->result();
    }
}
