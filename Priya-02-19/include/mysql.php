<?php
require_once('constant.php');


class exe_query{
public $connection = "";
	function __construct(){
		$this->connection = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE) or die("Can't Connect");
	}

	 function login_data($table_name,$where_field,$where_data){
		$output = 0;
		$_connection = $this->connection;
		$login_output = mysqli_query($_connection,"SELECT * FROM $table_name WHERE $where_field = $where_data");
		if($row = mysqli_fetch_object($login_output)){
			return $output=1;
		}
		else{
			return $output;
		}

	}

	function select_data($table_name){
		$_connection = $this->connection;
	$output = array();
		$fetch_all_query =  "SELECT * FROM $table_name";
	$fetch_all_result = mysqli_query($_connection,$fetch_all_query) or die("Query Error");

	while($fetch_all_row = mysqli_fetch_assoc($fetch_all_result)){ 

		$output['success'] = 1;
		$output['output'][] = $fetch_all_row;
	}
	return $output;
}

	function get_data($table_name,$where_field='1',$where_data=
		'1'){
		$_connection = $this->connection;
	$output = array();
		$fetch_all_query =  "SELECT * FROM $table_name WHERE $where_field = '".$where_data."'";
	$fetch_all_result = mysqli_query($_connection,$fetch_all_query) or die("Query Error");

	if($fetch_all_row = mysqli_fetch_assoc($fetch_all_result)){ 

		$output['success'] = 1;
		$output['output'] = $fetch_all_row;
		return $output;
	}	
	else{
		return $output['success'] = 0; 
	}
}

function update_data($table_name,$set_array,$where_field,$where_data){
	$_connection = $this->connection;
	$output = array();
	$set = "";
	$x=1;
	foreach($set_array as $key=>$value){
                $set .= "{$key} = \"{$value}\"";
                if($x < count($set_array)){
                    $set .= ',';
                }
               $x++;
            }
	$output = array();
	$update_query = "UPDATE $table_name SET $set WHERE $where_field = '$where_data'";
	$update_result = mysqli_query($_connection,$update_query) or die('Query Error');
		if($update_result){
			return $output['success'] = 1;
		}
		else{
			return $output['success'] = 0;	
		}	
}

function delete_data($table_name,$where_field,$where_data){
	$_connection = $this->connection;
	$output = array();
	$delete_query = "DELETE FROM $table_name WHERE $where_field = '".$where_data."'";
	$delete_result =  mysqli_query($_connection,$delete_query);
	if($delete_result){
		return $output['success'] =1;
	}
	else{
		return $output['success'] = 0;
	}
}

function insert_data($table_name,$set_array){
	$_connection = $this->connection;
	$output = array();
	$field = $data = "";
	$x =1;
	foreach($set_array as $key=>$value){
                $field .= $key;
                $data .= "'".$value."'";
                if($x < count($_POST)) {
                    $field .= ',';
                    $data .= ',';
                }
                $x++;
            }
	$output = array();
	$insert_query = "INSERT INTO $table_name($field) VALUES ($data)" ;
	$insert_result = mysqli_query($_connection,$insert_query) or die('Query Error');
	if($insert_result){
		return $output['success'] =1;
	}
	else{
		return $output['success'] =0;
	}
}

function import_data($table_name,$field,$data){
	$_connection = $this->connection;
	$field = implode(",",$field);
	$data = "'".implode("' ,'",$data)."'";
	$output = array();
	$insert_query = "INSERT INTO $table_name($field) VALUES ($data)" ;
	$insert_result = mysqli_query($_connection,$insert_query) or die('Query Error');
	if($insert_result){
		return $output['success'] =1;
	}
	else{
		return $output['success'] =0;
	}


}




}




?>