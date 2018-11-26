<?php
session_start();
function connect(){
	$connection=mysqli_connect(
	'127.0.0.1',
		'root',
		'',
		'sofa'
	);
	mysqli_set_charset($connection,'utf8');
	return $connection;
}
function getData($sql){

    $resultSet = mysqli_query(connect(), $sql);
    $result = [];
    while (true) {
        $row = mysqli_fetch_assoc($resultSet);
        if ($row == null) {
            break;
        }
        $result[] = $row;
    }

    return $result;}
function getOneData($sql){
	$connection=connect();
	$resultSet= mysqli_query(connect(),$sql);
	if(!$resultSet)return false;
	return mysqli_fetch_assoc($resultSet);}
function execute($squery){
	return mysqli_query(connect(),$squery);
	
}