<?php 
$conn = mysqli_connect('localhost','root','','portfolio_admin') or die('error'); 
$select_query = "SELECT conference_id,conference_title FROM conference_detail";
$result = mysqli_query($conn,$select_query);
$output = "";

if(isset($_POST['action']) && $_POST['action']=="ajax"){
	$array = array();
	$select_speaker = "SELECT * FROM conference_speaker_detail WHERE conference_id = '".$_POST['conference_id']."'";
	$result_speaker = mysqli_query($conn,$select_speaker);
	while($row_speaker = mysqli_fetch_assoc($result_speaker)){
		$array['speaker_name'] = $row_speaker['speaker_name'];
		$array['speaker_designation'] = $row_speaker['speaker_designation'];
	}
	$json_encode = json_encode($array);
	echo $json_encode;
	exit;
	
	
}

?>
<html>
<select id="conference_title"> 
<option> -select </option>
<?php
while($rows=mysqli_fetch_assoc($result)){
	echo  "<option value='".$rows['conference_id']."'>".$rows['conference_title']."</option>";
	

	
} ?>

	</select>
	<div id="show_data" style="display:none">
	<label> Speaker Name: </label>
	<input type="text" id="speaker_name" value="">
	<label> Speaker Designation: </label>
	<input type="text" id="speaker_designation" value="">
</div>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function(){
	jQuery("#conference_title").change(function() {
		var conference_id = jQuery(this).val();
		jQuery.ajax({
			method:"post",
			url:"index.php",
			data:{conference_id:conference_id,action:"ajax"}	
		}).done(function(msg) {
			var get_data = jQuery.parseJSON(msg);
			jQuery("#show_data").show();
			jQuery("#speaker_name").val(get_data.speaker_name);
			jQuery("#speaker_designation").val(get_data.speaker_designation);
			});
	 
	});	
	

});
</script>