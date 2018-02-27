<?php 
$conn = mysqli_connect('localhost','root','','admin_db') or die('error'); 

if(isset($_POST['action']) && $_POST['action']=="login_check"){
$select_query = "SELECT user_name,user_password FROM login_admin WHERE user_name='".base64_decode($_POST['username'])."' and user_password = '".base64_decode($_POST['password'])."';";
$result = mysqli_query($conn,$select_query);

$success = "";
if($row=mysqli_fetch_assoc($result)){
	echo $success = true;
	
	
}
exit;
}

?>
<html>
<h1> Dashboard </h1>
	<div id="show_data">
	<label> Username: </label>
	<input type="text" id="username" value="">
	<label> Password: </label>
	<input type="password" id="password" value="">
	<input type="button" id="submit" value="Submit" name="submit">
</div>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function(){
	var username = localStorage.getItem("username");
	var password =localStorage.getItem("password");
	if(username != null && password != null){
		jQuery.ajax({
			method: "post",
			url: "dashboard.php",
		data: {username:username,password:password, action:"login_check"}
		}).done(function(msg) {
			if(msg == 0){
				window.location.href="index.php";
			}
				
			
		});
		
	}
	else{
		
		window.location.href="index.php";
	}
	
	
	
		
	

});
</script>