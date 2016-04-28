<html>
<head>
<title></title>
<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/prettify.css'); ?>" rel="stylesheet">
	
</head>
<body>
<div id="main">
<div id="login">
<legend>Welcome</legend> 
		<div style="margin-left:30%;margin-top:20px;" >

			<h2> <?php echo "<a href=".$user_profile['name']." target='_blank' ><img class='fb_profile' src="."https://graph.facebook.com/".$user_profile['id']."/picture".">"."</a>"."<p class='profile_name'>Welcome ! <em>".$user_profile['name']."</em></p>";
			echo "<a class='logout' href='$logout_url'>Logout</a>";?></h2>


		</div>
</div>
</div>

 <div style="float:left" class='container'>

			<section id="wizard">
			  <div id="rootwizard">
					<div class="navbar">
					  <div class="navbar-inner">
					    <div class="container">
					<ul>
					  	<li><a href="#tab1" data-toggle="tab">First</a></li>
						<li><a href="#tab2" data-toggle="tab">Second</a></li>
						<li><a href="#tab3" data-toggle="tab">Third</a></li>
						<li><a href="#tab4" data-toggle="tab">Fourth</a></li>
						
					</ul>
					 </div>
					  </div>
					</div>
					<div id="bar" class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                    </div>
					<div class="tab-content">
					    <div class="tab-pane" id="tab1">
					    <div class="form-group">
							<label >First Name :</label> <input type="text" name="fname" id='fname' class="form-control" placeholder='Enter Your First Name'/>
						</div>
						<div class="form-group">
							<label>Last Name:</label> <input type="text" name="lname" id='lname' class="form-control" placeholder='Enter Your Last Name'/>
						</div>
					     
					    </div>
					    <div class="tab-pane" id="tab2">
					      	<div class="form-group">
							<label>Company Name:</label> <input type="text" name="cname" 
							id='cname' class="form-control" placeholder='Company Name'/>
						</div>
						<div class="form-group">
							<label>Address:</label> <input type="text" name="address" id='address' class="form-control" placeholder='Address'/>
						</div>
					    </div>
						<div class="tab-pane" id="tab3">
							3
					    </div>
						<div class="tab-pane" id="tab4">
							4
					    </div>
						
						<ul class="pager wizard">
							<li class="previous first" style="display:none;"><a href="#">First</a></li>
							<li class="previous"><a href="#">Previous</a></li>
							<li class="next last" style="display:none;"><a href="#">Last</a></li>
						  	<li class="next"><a href="#">Next</a></li>
						</ul>
					</div>
				</div>


			</section>
	</div>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="<?php print base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php print base_url()?>assets/js/jquery.bootstrap.wizard.js"></script>
    <script src="<?php print base_url()?>assets/js/prettify.js"></script>
	<script src="<?php print base_url()?>assets/js/script.js"></script>
</body>
</html>