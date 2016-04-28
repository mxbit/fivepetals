<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model{
    private $__table = 'tbl_user_details';
    
    
    
    public function __construct()
    {
        parent::__construct();
    }


     public function add_user($data){
        $query = $this->db->insert($this->__table, $data); 
        return $query;
   }

}



