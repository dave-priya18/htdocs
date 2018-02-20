<?php
  require_once('include/mysql.php');
  require_once('layout/header.php');

//exe_query Object

  $object = new exe_query();
  $object->__construct();

?>

<?php
//Varibable Initialization

  $count =0;
  $error = array();
  $error['login_email'] = $error['login_pwd'] = "";
  $login_email = $login_pwd = "";
  
  if(isset($_POST['login'])){
//Username - Validation 
    if(isset($_POST['login_email'])==""){
      $count++;
      $error['login_email'] = "Login Id can't be empty";
    }
    else{
      $login_email = $_POST['login_email'];
    }
  //Password - Validation
    if(isset($_POST['login_pwd']) == ""){
      $count++;
      $error['login_pwd'] = "Password can't be empty";
    }
    else{
      $login_pwd = $_POST['login_pwd'];
    }

//Login Credentials Check
    $table_name = "login";
    unset($_POST['login']);
    foreach ($_POST as $key => $value) {
      $where_field = $key;
      $where_data = "'$value'";
    }

    $output = $object->login_data($table_name,$where_field,$where_data);
    if($output==1){
      ?>
      <script type="text/javascript">alert("Connected Successfully");</script>
    <?php 
    header('Location: userprofile.php');}
    else{ ?>
      <script type="text/javascript">alert("Failed Login Credentials");</script>
    <?php
    }

  } 




?>
<div id="content">
  <h1>Login</h1>
    <p>Kindly Login to get to Dashboard</p>
      <form action="#" method="post">
        <div class="form_settings">
          <label>Username: </label>
          <span style="color:red">*<?php echo $error['login_email']; ?></span>
          <input class="contact" type="text" name="login_email" value="" />
          <label>Password: </label>
          <span style="color:red">* <?php echo $error['login_pwd']; ?></span>
          <input class="contact" type="password" name="login_pwd" value="" />
          <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="login" value="submit" /></p>
        </div>
      </form>




<?php
  require_once('layout/footer.php');
?>