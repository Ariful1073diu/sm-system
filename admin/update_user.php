<h1 class="text-primary"><i class="fa fa-pencil-square-o"></i>Update User<small>Update User</small>
</h1>
<ol class="breadcrumb">
    <li><a href="index.php?page=dashboard"> <i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="index.php?page=all_users"> <i class="fa fa-users"></i> All Users</a></li>
    <li class="active"><i class="fa fa-pencil-square-o"></i> Update Users</>
    </li>
</ol>
<?php 
    require_once"./dbcon.php";
    $id = ($_GET['id']);
    $db_data = mysqli_query($link, "SELECT * FROM users WHERE id='$id'");
    $db_row = mysqli_fetch_assoc($db_data);
    
    if(isset($_POST['update_user']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];

        $photo = explode('.',$_FILES['photo']['name']);
        $photo = end($photo);
        $photo_name = $username.".".$photo;

       
        $query ="UPDATE `users` SET `name`='$name',`email`='$email',`username`='$username',`photo`='$photo_name' WHERE 'id'='$id'";
        $result = mysqli_query($link,$query);
        if($result){
            move_uploaded_file($_FILES['photo']['tmp_name'],'Images/'.$photo_name);
            header('location:index.php?page=all_users');
        }
        
    }
   
?>
<div class="row">
    <div class="col-sm-6">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name"> Name</label>
                <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control" value="<?=$db_row['name']?>">
            </div>
            <div class="form-group">
                <label for="email"> email</label>
                <input type="text" name="email" placeholder="Enter your email" id="email" class="form-control" value="<?=$db_row['email']?>">
            </div>
            <div class="form-group">
                <label for="username">User_Name</label>
                <input type="text" name="username" placeholder="Enter your username" id="username" class="form-control" value="<?=$db_row['username']?>">
            </div>
            <div class="form-group">
                <label for="photo">User Photo</label>
                <input type="file" name="photo"  id="photo" value="<?=$db_row['photo']?>">
            </div>
            <div class="form-group">

                <input type="submit" value="update_user" name="update_user" class="btn btn-primary pull-right">

            </div>
        </form>
    </div>
</div>