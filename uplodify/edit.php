<?php 
$conn = mysqli_connect('localhost','root','','admin_db') or die('error'); 
if(isset($_POST['action']) && $_POST['action']=="ajax_edit"){
	$count = 0;
	if($_POST['username'] == ""){
		$count++;
	}
	if($_POST['address'] == ""){
		$count++;
	}
	if($count>0){
		$error = "ERROR";
		echo $error;
		exit;
	}
	else{
		$update = "UPDATE login_admin SET 
		user_name='".$_POST['username']."',user_password='".$_POST['address']."'
		WHERE login_id='".$_POST['login_id']."'";
		$result_update = mysqli_query($conn,$update);
		if($result_update){
			$success = "Updated Successfully";
			echo $success;
			exit;	
		}
	}
	exit;

}	

$select = "SELECT user_name,user_password from login_admin WHERE login_id = '".$_GET['id']."'";
$result = mysqli_query($conn,$select);
$username = $address = "";
if($row=mysqli_fetch_assoc($result)){
$username = $row['user_name'];
$address = $row['user_password']; 
}




?>
<html>
<h1> Dashboard </h1>
	<div id="show_data">
	<label> Username: </label>
	<input type="hidden" value="<?php echo $_GET['id']; ?>" id="login_id">
	<input type="text" id="username" value="<?php echo $username; ?>">
	<br>
	<label> Address: </label>
	<input type="text" id="address" value="<?php echo $address; ?>">
	<input type="button" id="submit" value="Submit" name="submit">
</div>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function(){
	jQuery('#submit').click(function (){
		var login_id = jQuery('#login_id').val();
		var username = jQuery('#username').val();
		var address = jQuery('#address').val();
		var default_action = "ajax_edit";
		if(login_id == ""){
			default_action = "ajax_add";
		}
		jQuery.ajax({
			method: "post",
			url: "edit.php",
			data: {login_id:login_id,username:username,address:address,
			action:default_action}
		}).done(function (msg){
			alert(msg);
		});
			
	alert("hi");
	});
});
</script>