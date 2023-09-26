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
$sql="SELECT * FROM `std_info`";
$result=mysqli_query($conn,$sql);
if($result){
    echo "ok";
    if(mysqli_num_rows($result)>0){
        echo "<table border='1'>";
        echo "<tr><th>id</th><th>name</th><th>surname</th>";
        echo "<th>ชื่อ</th><th>นามสกุล</th>";
        echo "<th>Major</th><th>email</th></tr>";
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $en_name=$row['en_name'];
            $en_surname=$row['en_surname'];
            $th_name=$row['th_name'];
            $th_surname=$row['th_surname'];
            $major_code=$row['major_code'];
            $email=$row['email'];
            echo ' <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$en_name.'</td>
            <td>'.$en_surname.'</td>
            <td>'.$th_name.'</td>
            <td>'.$th_surname.'</td>
            <td>'.$major_code.'</td>
            <td>'.$email.'</td>
            <td>
                <button><a href="update.php?
                updateid='.$id.'">Update</a></button>
                <button><a href="delete.php? 
                deleteid='.$id.'">Delete</a></button>
            </td>
            </tr>';
            // echo "<tr><td>".$row["id"]."</td>";
            // echo "<td>".$row["en_name"]." </td>";
            // echo "<td>".$row["en_surname"]." </td>";
            // echo "<td>".$row["th_name"]." </td>";
            // echo "<td>".$row["th_surname"]." </td>";
            // echo "<td>".$row["major_code"]." </td>";
            // echo "<td>".$row["email"]."</td></tr>";
            // echo "<td><button><a href="">Update</a></button>
            //     <button><a href="">Delete</a></button>
            // </td>"
                
        }
        echo "</table>";
    }
}
mysqli_close($conn);
echo "<a href='insert_std_form.html'>Insert new record</a>";
//ถ้าใครทำขึ้นมาป็อปอัพได้เวลากรอกข้อมูล ไม่ต้องไปอีกหน้านึงจารย์มีคะแนนพิเศษให้
?>


