 <?php  $this->load->helper('html'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
  <link rel="stylesheet" href="<?php print base_url()?>assets/lib/sweet/sweet-alert.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php print base_url()?>assets/js/loginscript.js"></script>
<script src="<?php print base_url()?>assets/lib/sweet/sweet-alert.min.js"></script>
<?php  $base_url=$this->config->item('base_url'); ?>
</head>
<body>
<?php 
 $ses_user = $this->session->userdata('customer');
 
   if($ses_user)   { 

        echo '<img src="https://graph.facebook.com/'. $ses_user['userid'] .'/picture" width="50" height="50"/><div>'.$ses_user['name'].'</div>';	
        ?>
	     <a href="<?php echo site_url('/Oauth_Login/logout'); ?>">Logout</a>;


<?php  } else {

echo img(array('src'=>$base_url.'images/facebook.png','id'=>'facebook','style'=>'cursor:pointer;float:left;margin-left:550px;'));
?>	
</div>

 <?php } ?>

<div id="fb-root"></div>
<div id="status"></div>

   
</body>
<html>