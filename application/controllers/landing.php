<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

  public function __construct(){  
    parent::__construct();  
    if (!$this->ion_auth->logged_in()){
      redirect('auth', 'refresh');
    }  
   
   

    $this->load->library('grocery_CRUD');
  }

  public function index(){  
    redirect('landing/admin_home');
  }

  
  public function admin_home()  {
    $data['metro'] = true;
    $data['content'] = 'admin/view_admin_landing';  
    $this->load->view('admin/template_admin',$data);    
  }

  public function category()  {

    $crud = new grocery_CRUD();
    $crud->set_table('tbl_category');    
    $crud->set_subject('Category List');

    $crud->display_as('category_name','Category Name');
    

    $crud->required_fields('category_name');
    $crud->columns('category_name');

    $data['gcrud'] = $crud->render();

    $data['title'] = 'Category List';  
    $data['content'] = 'common_list/list_all';  
    $this->load->view('admin/template_admin',$data);  
  }

 public function subcategory()  {

    $crud = new grocery_CRUD();
    $crud->set_table('tbl_subcategory');    
    $crud->set_subject('Sub Category List');

    $crud->set_relation('category_id','tbl_category','category_name'); 

    $crud->display_as('subcategory_name','Sub Category Name');
    $crud->display_as('category_id','Category Name');
    

    $crud->required_fields('subcategory_name','category_id');
    $crud->columns('subcategory_name','category_id');

    $data['gcrud'] = $crud->render();

    $data['content'] = 'common_list/list_all';  
    $data['title'] = 'Sub Category List';  
    $this->load->view('admin/template_admin',$data);  
  } 


 public function product()  {

      $crud = new grocery_CRUD();
      $crud->set_table('tbl_product');    
      $crud->set_subject('Product');



    $crud->set_relation('product_catrgory','tbl_category','category_name'); 
    $crud->set_relation('product_subcategory','tbl_subcategory','subcategory_name'); 


      $crud->display_as('product_id','ID');
      $crud->display_as('product_catrgory','Category');
      $crud->display_as('product_subcategory','Sub Category');
      $crud->display_as('item','Item');

      $crud->required_fields('product_id','product_catrgory','item');
      $crud->columns('product_id','product_catrgory','product_subcategory','item');

      $data['gcrud'] = $crud->render();

      $data['title'] = 'Product';  
      $data['content'] = 'common_list/list_all';  
      $this->load->view('admin/template_admin',$data);  
  } 



//@class ends
}