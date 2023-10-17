<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/update_admin.css">
    <title>Document</title>
</head>
<body>
    <?php
        include("header.php");
    ?>
        
    <?php 
    include("../core/model/database.php");
    $select_admin = "select * from admin limit 1 ;" ;
    $result_admin = $connect->query($select_admin);
    if($result_admin->num_rows > 0 ){
        $row = $result_admin->fetch_assoc();
       ?>

        <div class="container">
            <form action="" method="POST" class="update px-4 py-3">
                <h1>Update Admin</h1>
                <div class="row">
                    <div class="mb-3">
                        <label for="exampleDropdownFormEmail1" class="form-label">Admin_name :</label>
                        <input type="text" class="form-control" id="exampleDropdownFormEmail1" name="admin_name" value="<?php echo $row['admin_name'] ;?>" required >
                    </div>
                    <div class="mb-3">
                        <label for="exampleDropdownFormPassword1" class="form-label">Password :</label>
                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" name="admin_password" value="<?php echo $row['password']; ?>" required>
                    </div>
                    <div >
                         <button type="submit" class="btn btn-primary"name="update_admin" >Update</button> 
                    </div>
                   
                </div>
                
            </form>
        </div>

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

    <?php
        include("footer.php");
    ?>

</body>
</html>