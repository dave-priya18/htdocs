<?php 
$conn = mysqli_connect('localhost','root','','admin_db') or die('error'); 
if(isset($_POST['action']) &&  $_POST['action']=="ajax") {
	
	extract($_POST);
	$array = array();
	if($field_name!="" && $field_address!=""){
	$array['first_name'] = $field_name;	
	$array['address'] = $field_address;	

	$update = mysqli_query($conn,"UPDATE login_admin SET user_name='".$field_name."', user_password='".$field_address."' WHERE login_id='".$user_id."'");		
		
	}
	echo json_encode($array);
	exit;
	
}

$exe = mysqli_query($conn,"SELECT * FROM `login_admin` WHERE login_id='1'");	
$fetch = mysqli_fetch_assoc($exe);
?>

<div id="container">
<p><label>Name : </label><span id="name"><?php echo $fetch['user_name']; ?></span></p>
<p><label>Address : </label><span id="address"><?php echo $fetch['user_password']; ?></span></p>
</div>
<div id="fieldset" style="display:none;">
<form method="POST">
<p><label>Name : </label><input type="text" id="field_name" value="<?php echo $fetch['user_name']; ?>" ></p>
<p><label>Address : </label><input type="text" id="field_address" value="<?php echo $fetch['user_password']; ?>" ></p>
<p><input type="submit" name="save" value="save" id="save"></p>
<input type="hidden" id="user_id" value="<?php echo $fetch['login_id']; ?>">
</form>

</div>
<p><a href="javascript:void(0);" id="edit_profile" >Edit Profile</a></p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function(){

	jQuery("#edit_profile").on('click',function(){
		jQuery("#container").hide();
		jQuery("#fieldset").show();

	});
	
		
			jQuery("#save").on("click",function(e){
			e.preventDefault();
			var field_name = jQuery("#field_name").val();		
			var field_address = jQuery("#field_address").val();		
			var user_id = jQuery("#user_id").val();	
				var count = 0;
				
				if(field_name == ""){
					count++;
					jQuery("#field_name").css('border','1px solid red');
				}
				else{
					jQuery("#field_name").css('border','1px solid green');
				}

				if(field_address == ""){
					count++;
					jQuery("#field_address").css('border','1px solid red');
				}
				else{
					jQuery("#field_address").css('border','1px solid green');
				}

		
				if(count>0){
					return false;
				}
				else{
					
		
				 jQuery.ajax({
					method: "POST",
					url: "index.php",
					data: { field_name:field_name,field_address:field_address,action:"ajax",user_id:user_id }
					})
					.done(function( msg ) {
						
					jQuery("#container").show();
					jQuery("#fieldset").hide();
					
					var get_val = jQuery.parseJSON(msg);
					jQuery("#name").text(get_val.first_name);
						jQuery("#address").text(get_val.address);
					
					
					});
					return false;
					//ajax code

					
						
						
					
				}
					
			});

});
</script>