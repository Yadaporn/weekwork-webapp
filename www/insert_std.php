<?php
//172.21.236.63
$id=$_POST["id"];
$en_name=$_POST["en_name"];
$en_surname=$_POST["en_surname"];
$th_name=$_POST["th_name"];
$th_surname=$_POST["th_surname"];
$major_code=$_POST["major_code"];
$email=$_POST["email"];

$username="root";
$password="12341234";
$dbname="students";
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
echo "Connected successfully</br>";
$sql="INSERT INTO `std_info` (`id`, `en_name`, `en_surname`, `th_name`, `th_surname`, `major_code`, `email`) VALUES ('$id', '$en_name', '$en_surname', '$th_name', '$th_surname', '$major_code', '$email')";

$result=mysqli_query($conn,$sql);
if($result){
    echo "New record created successfully!<a href='student.php'>Back</a>";
}
else {echo "Error:".$sql."<br>".mysqli_errors($conn);}
mysqli_close($conn); 
?>