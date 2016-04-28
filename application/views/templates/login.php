
<?php  $this->load->helper('html'); ?>
<?php  $base_url=$this->config->item('base_url'); ?>

<div style="height: 45px; background-color: #797979;">
<?php 
 $ses_user = $this->session->userdata('customer');
 
   if($ses_user)   { 

        echo '<img src="https://graph.facebook.com/'. $ses_user['userid'] .'/picture" width="50" height="50"/><div>'.$ses_user['name'].'</div>';	
        ?>
	     <a href="javascript:void(0)" class="logout_action">Logout</a>


<?php  } else {

			echo img(array('src'=>$base_url.'images/facebook.png','id'=>'facebook','style'=>'cursor:pointer;height: 35px;float:right;margin-top: 10px;'));
			?>	
			 <?php } ?>

</div>
