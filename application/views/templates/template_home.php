<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title><?php print $title ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- CSS Global Compulsory -->
<link rel="stylesheet" href="<?php print base_url()?>assets/lib/sweet/sweet-alert.css">

<script src="<?php print base_url()?>assets/js/global.js"></script>
 <script>
    window.fp.path = "<?php echo site_url(); ?>";
</script> 
</head> 

<body>
<div >
   
<!-- **************************** login starts ********************************* -->
<?php $this->load->view($template_login);?>
<!-- **************************** login ends********************************* -->



<?php echo '';?>


<!-- JS Page Level -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php print base_url()?>assets/js/loginscript.js"></script>
<script src="<?php print base_url()?>assets/lib/sweet/sweet-alert.min.js"></script>
    


</body>
</html> 


