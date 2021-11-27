<?php
$servername="localhost";
$username="root";
$password="";
$dbname="poetrydb";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die( "Connection failed".$conn->connect_error);
}

$POETRY=$_POST['poetry_data'];
$ID=$_POST['id'];

$query="UPDATE poetry SET poetry_data='$POETRY' WHERE id='$ID'";
$result=$conn->query($query);

if($result){
    $response=array("status"=>"1","message"=>"update successfully");
}else{
    $response=array("status"=>"1","message"=>"update not successfully");
}

echo json_encode($response);



?>
