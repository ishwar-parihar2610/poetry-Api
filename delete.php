<?php
$servername="localhost";
$username="root";
$password="";
$dbname="poetrydb";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed :".$conn->connect_error);
}

$ID=$_POST['poetry_id'];
$query="DELETE FROM poetry WHERE id='$ID'";

$result=$conn->query($query);
if($result){
    $response=array("status"=>"1","message"=>"poetry delete successfully");
}else{
    $response=array("status"=>"0","message"=>"poetry not delete successfully");
}
echo json_encode($response);

?>