<?php
  require_once('include/mysql.php');
  require_once('layout/header.php');

//exe_query Object

  $object = new exe_query();
  $object->__construct();

?>
<?php


$File = '/opt/lampp/htdocs/Priya-02-19/csv/fc.csv';
//$File = '/var/www/html/USA/benefit/dovetaildata/upload/Sample_Benefit_Consumers.csv';

$arrResult  = array();
$handle     = fopen($File, "r");
    while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
        $arrResult[] = $data;
    }
    fclose($handle);

 echo "<pre>";
print_r($arrResult);
$fields = $arrResult[0]; 
unset($arrResult[0]);
foreach ($arrResult as $key => $value) {
  $object->import_data($table_name,$fields,$value);
}

?>

<?php
  require_once('layout/footer.php');
?>