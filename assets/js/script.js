$(document).ready(function() {

	
	  	$('#rootwizard').bootstrapWizard({onNext: function(tab, navigation, index) {
	  		if(index==1) {
					// Make sure we entered the name
					if(!$('#fname').val()) {
						alert('You must enter your firstname');
						$('#fname').focus();
						return false;
					}
					if(!$('#lname').val()) {
						alert('You must enter your lastname');
						$('#lname').focus();
						return false;
					}
				}
				if(index==2) {
					// Make sure we entered the name
					if(!$('#cname').val()) {
						alert('You must enter your company name');
						$('#cname').focus();
						return false;
					}
					if(!$('#address').val()) {
						alert('You must enter your company address');
						$('#address').focus();
						return false;
					}
				}

				// Set the name for the next tab
				$('#tab3').html('Hello, ' + $('#fname').val());

			}, 
			onTabClick: function(tab, navigation, index){
				alert('on tab click disabled');
						return false;
			},
			
			onTabShow: function(tab, navigation, index) {
				var $total = navigation.find('li').length;
				var $current = index+1;
				var $percent = ($current/$total) * 100;
				$('#rootwizard .progress-bar').css({width:$percent+'%'});
			}});
		window.prettyPrint && prettyPrint()
	});