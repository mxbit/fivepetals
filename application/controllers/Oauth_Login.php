<?php defined('BASEPATH') OR exit('No direct script access allowed');

class oauth_Login extends CI_Controller {

public function __construct() {  
parent::__construct();

    $this->_data = array("template_login" => "templates/login");
  
}

public function index() {

$data = $this->_data;
$data['title'] = 'Fivepetals';
$this->load->view('templates/template_home',$data);

} 

 
public function add_user_details() {
  
  $user = $this->input->post();
  $insert_data = array(
          'email'  => $user['email'],
          'name'   => $user['name'],
          'userid' => $user['id'],
          'public_profile' => json_encode($user)
          );  
  
                $this->db->select('email');
                $this->db->where(array('email'=>$user['email'] ));
                $query = $this->db->get('tbl_user_details');
                  if($query->num_rows() <= 0) {
                         $this->db->insert('tbl_user_details', $insert_data);
                         }

  $this->session->set_userdata('customer', $insert_data);
  echo 'true';

}

public function logout() {

  $this->session->unset_userdata('customer');
  echo 'true';
}




 
}