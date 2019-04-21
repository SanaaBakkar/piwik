<?php 

//code for login system
if($_POST)
{
	include('config.php');
	
	$username=$_POST['username'];
    $password=$_POST['password'];
	
	$query="SELECT * from user where username='$username' and password='$password'";
	$result=mysqli_query($conn,$query);
	
	if(mysqli_num_rows($result)==1)
		{
			session_start();
		    $_SESSION['ratingtool']='true';
		    header('location:index.php');
			
		}
	else { 
				$error = 'Invalid username or password';
		 }
}

	

	
?>






	<!DOCTYPE html>
<html>
     <head>
			<title>RATING TOOL</title>
			<link rel="stylesheet" type="text/css" href="style.css">
		<!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//localhost/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
     </head>
 
 <body>
  <div class="header">
  	<h2>Login</h2>
  </div>
  
	
	<form method="POST" >
	
	<!--Error message in case invalid password -->
		  <?php if(isset($error)){ ?>
		   <div class="error"><?php echo $error; ?></div>
		   <?php } ?>
	   
	<div class="input-group">
	
  	  <label>Username</label>
  	  <input type="text" name="username">
  	
  	  <label>Password</label>
  	  <input type="password" name="password">
	 
  	  <div class="input-group">
  	  <button type="submit" class="btn" name="login">Login</button>
	  </div>
	
  	</div>
	
	</form>

</body>

</html>




