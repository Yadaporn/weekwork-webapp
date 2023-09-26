<?php
$id=$_GET['updateid'];
echo $id;
?>
<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div id="info"></div>
        <form method="post" action="update.php">
            id: <input type="text" name="id" ><br>
            name: <input type="text" name="en_name"><br>
            surname: <input type="text" name="en_surname"><br>
            ชื่อ: <input type="text" name="th_name"><br>
            นามสกุล: <input type="text" name="th_surname"><br>
            Major: <input type="text" name="major_code"><br>
            Email: <input type="text" name="email"><br>
            <button type="submit">Update</button>
        </form>

    </body>
</html>