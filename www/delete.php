<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
//172.21.236.63
$servername="localhost";
$username="root";
$password="12341234";
$dbname="students";
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
echo "Connected successfully</br>";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `std_info` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Deleted successfully!<a href='student.php'>Back</a>";
    }
    else {
        die(mysqli_error($conn));
    }
}


?>