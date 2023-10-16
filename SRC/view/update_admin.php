<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Update Admin</h1>
    <?php 
    include("../core/model/database.php");
    $select_admin = "select * from admin limit 1 ;" ;
    $result_admin = $connect->query($select_admin);
    if($result_admin->num_rows > 0 ){
        $row = $result_admin->fetch_assoc();
       ?>
            <form action="" method="POST">
                <label for="admin_name">Admin_name</label>
                <input type="text" name="admin_name" value="<?php echo $row['admin_name'] ;?>" required >
                <br>
                <label for="admin_password">Password</label>
                <input type="password" name="admin_password" value="<?php echo $row['password']; ?>" required>
                <br>
                <input type="submit" name="update_admin" value="Update">
            </form>
       <?php
    }
    ?>
    
    <?php 
    if(isset($_POST['update_admin'])){
        $admin_name = htmlspecialchars($_POST['admin_name']) ;
        $admin_password = htmlspecialchars($_POST['admin_password']) ;
        $update_admin = "update admin set admin_name = '$admin_name' , password = '$admin_password' where id > 0;";
        $result_update = $connect->query($update_admin);
        if($result_update){
            echo "<script> alert('update successfully !')</script>";
        }
        else {
            echo "<script> alert('update error !')</script>";
        }
    }
    ?>

</body>
</html>