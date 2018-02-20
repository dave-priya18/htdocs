<?php 
 require_once('include/mysql.php');
 ?>
<?php require_once('layout/header.php'); 
 $object = new exe_query();
 $_connection = $object->connection;
?>
<?php
                                    
    $select_query = "SELECT * from `user_profile`";
    $result_data = mysqli_query($_connection,$select_query); 
if(isset($_GET['export'])){
    $table_name = "user_profile";

$query = $object->select_data($table_name);


$fields = array('company_name','user_username', 'user_email', 'user_fname', 'user_lname', 'user_address', 'user_city','user_country','user_postalcode','user_aboutme');

$fp = fopen("/opt/lampp/htdocs/Priya-02-19/csv/f.csv", 'w');
  fputcsv($fp, $fields);
//   echo "<pre>";
 foreach ($query['output'] as $key=>$value) {
  unset($value['user_userid']);
    fputcsv($fp,$value);
//    print_r($value);

}

fclose($fp);
}



if(isset($_GET['import'])){
        $table_name = "user_profile";

$File = '/opt/lampp/htdocs/Priya-02-19/csv/f.csv';
//$File = '/var/www/html/USA/benefit/dovetaildata/upload/Sample_Benefit_Consumers.csv';

$arrResult  = array();
$handle     = fopen($File, "r");
echo "<pre>";
$data = fgetcsv($handle, 1000, ",");
    while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
        $arrResult[] = $data;
    }
    fclose($handle);


$fields = $arrResult[0]; 
unset($arrResult[0]);
foreach ($arrResult as $key => $value) {
  $object->import_data($table_name,$fields,$value);
}

}
?>
<div class="content">   
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Enrolled User Profile</h4>
                        <a class="pull-right" href='user_manipulation.php'>Add User Profile</a>
                        <form>
                        <input type="submit" name="import" value="Import">
                        <input type="submit" name="export" value="Export">
                    </form>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                            	<th>Company Name</th>
                            	<th>Username</th>
                            	<th>Email id</th>
                            	<th>First Name</th>
                                <th>Last Name</th>
                            </thead>
<?php
    $_increment = 1;
    while($rows = mysqli_fetch_assoc($result_data)){
?>
                            <tbody>
                                <tr>
                                	<td><?php $id=$rows['user_userid']; 
                                    echo $_increment ?></td>
                                	<td><?php echo $rows['company_name']?></td>
                                	<td><?php echo $rows['user_username']?></td>
                                	<td><?php echo $rows['user_email']?></td>
                                	<td><?php echo $rows['user_fname']?></td>
                                    <td><?php echo $rows['user_lname']?></td>
                                    <td><a href='user_manipulation.php?id=<?php echo $rows['user_userid'];?>&action=edit'>Edit</a></td> 
                                    <td><a href='user_manipulation.php?id=<?php echo $rows['user_userid']; ?>&action=delete' onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
                                </tr>
                            </tbody>
<?php
    $_increment++; 
} ?>
                        </table>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>


<?php include('layout/footer.php');