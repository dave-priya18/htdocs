<?php
  require_once('include/mysql.php');
  require_once('layout/header.php');

//exe_query Object

  $object = new exe_query();
  $object->__construct();

?>
<label>Name and Percentage of the Student</label>
<?php
  $output = array();
  $left_join_query="SELECT user_profile.user_fname AS Name,user_profile.user_lname AS Surname, ((user_exam.maths+user_exam.science+user_exam.gujarati+user_exam.hindi+user_exam.english+user_exam.social_science)*100/600) AS Percentage FROM user_profile LEFT JOIN user_exam ON user_profile.user_userid=user_exam.user_userid ";
  $query_data = mysqli_query($object->connection,$left_join_query);

?>

<table>
  <thead>
    <th> Name </th>
    <th> Surname </th>
    <th> Percentage </th>
  </thead>
  <tbody>
    
<?php
  while($query_result = mysqli_fetch_assoc($query_data)){
   ?>

<tr>
      <td> <?php echo $query_result['Name']; ?></td>
      <td> <?php echo $query_result['Surname'];?></td>
      <td> <?php echo $query_result['Percentage'];?></td>
    </tr>
 
  <?php } ?>
   </tbody>
</table>

<label>Student have Percentage >50 and live to  of the Student</label>
<?php
  $output = array();
  $left_join_query="SELECT user_profile.user_fname AS Name,user_profile.user_lname AS Surname, user_profile.user_city AS City,((user_exam.maths+user_exam.science+user_exam.gujarati+user_exam.hindi+user_exam.english+user_exam.social_science)*100/600) AS Percentage  FROM user_profile RIGHT JOIN user_exam ON user_profile.user_userid = user_exam.user_userid WHERE (((user_exam.maths+user_exam.science+user_exam.gujarati+user_exam.hindi+user_exam.english+user_exam.social_science)*100/600)>80.00) ";
  $query_data = mysqli_query($object->connection,$left_join_query);

?>

<table>
  <thead>
    <th> Percentage</th>
    <th> Name</th>
    <th> Surname</th>
    <th> City </th>
  </thead>
  <tbody>
    
<?php
  while($query_result = mysqli_fetch_assoc($query_data)){
   ?>

<tr>
      <td> <?php echo $query_result['Percentage'];?></td>
      <td> <?php echo $query_result['Name']; ?></td>
      <td> <?php echo $query_result['Surname'];?></td>
      <td> <?php echo $query_result['City'];?></td> 
      
    </tr>
 
  <?php } ?>
   </tbody>
</table>

<label>Student have Percentage >50 and live to  of the Student</label>
<?php
  $output = array();
  $left_join_query="SELECT ((user_exam.maths+user_exam.science+user_exam.gujarati+user_exam.hindi+user_exam.english+user_exam.social_science)*100/600) AS Percentage, user_profile.user_fname AS Name,user_profile.user_lname AS Surname, user_profile.user_city AS City FROM user_exam JOIN user_profile ON user_exam.user_userid = user_profile.user_userid";
  $query_data = mysqli_query($object->connection,$left_join_query);

?>

<table>
  <thead>
    <th> Name </th>
    <th> Surname </th>
    <th> City</th>
    <th> Percentage </th>
  </thead>
  <tbody>
    
<?php
  while($query_result = mysqli_fetch_assoc($query_data)){
   ?>

<tr>
      <td> <?php echo $query_result['Name']; ?></td>
      <td> <?php echo $query_result['Surname'];?></td>
      <td> <?php echo $query_result['City'];?></td> 
      <td> <?php echo $query_result['Percentage'];?></td>
    </tr>
 
  <?php } ?>
   </tbody>
</table>

<?php
  require_once('layout/footer.php');
?>


