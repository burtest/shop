<?php
session_start();
	$title="Camaro";
	$description="do23simvolov";
	$keywords="tovari";	
	$lop=$keywords.$description;
	$int=(int)$key;
	$email="kkkkkkkkkkkkkk@bk.ru";
	
	
	
	$db_location='localhost';
	$db_user='root';
	$db_pass='';
	$db_name='car';
	$db_con=mysqli_connect($db_location,
							$db_user,
							$db_pass,
							$db_name);
	
	if(!$db_con){
		exit('error');
		
		
	}
	mysqli_query($db_con ,"SET NAMES 'utf8'");
	
	
	












