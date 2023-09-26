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
     $id=$_POST['id'];//$id=$_GET['updateid'];//stuck this line
    
    $sql="SELECT * FROM `std_info` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if(isset($id)){
        $id=$_POST['id'];
            $en_name=$_POST['en_name'];
            $en_surname=$_POST['en_surname'];
            $th_name=$_POST['th_name'];
            $th_surname=$_POST['th_surname'];
            $major_code=$_POST['major_code'];
            $email=$_POST['email'];
    
    
            $sql="UPDATE `std_info` SET id=$id, en_name='$en_name', en_surname='$en_surname', th_name='$th_name', th_surname='$th_surname', major_code='$major_code', email='$email' WHERE id=$id";
            
            $result=mysqli_query($conn,$sql);
            if($result){
                echo "Updated Record!<br>";
                echo "<br>id",$id;
                echo "<br>Successfully!<a href='student.php'><br>Back</a>";

            }
            else {
                die(mysqli_error($conn));
            }
    }

?>

