  $(document).ready(function()  {
  



 window.fbAsyncInit = function() {
    
     FB.init({ 
     appId:'779224425541011',  
     cookie:true, 
     status:true, 
     xfbml:true, 
     oauth : true 
     });
 
};
   
(function(d){
           var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js";
           ref.parentNode.insertBefore(js, ref);
         }(document));



$('#facebook').click(function() {
  FB.login(function(response) { 
   
    if (response.status === 'connected') {
     sweetAlert("User is already connected");

          testAPI();
 
    } else if (response.status === 'not_authorized') {
      
      sweetAlert("Please log into this app");
      
    } else {

      sweetAlert("Please log into Facebook");
      
    }
  });


});




function testAPI() {
  
 FB.api('/me', 
    {fields: 'name,email,first_name,last_name,birthday,hometown,gender,education,work,likes'}, function(res) {
                
         $.ajax({ type: "POST", url: window.fp.path+'index.php/Oauth_Login/add_user_details', 
          data: res}).done(function( msg ) {
            window.location.reload(); 
         
         });            
        
     });

}
                


 $('.logout_action').click(function() {

                console.log('Logout')
                $.ajax({ type: "POST", url: window.fp.path+'index.php/Oauth_Login/logout' }).done(function( msg ) {
                    if(msg == 'true')   {
                     
                        window.location.reload();

                    }
                  });        
});

  });