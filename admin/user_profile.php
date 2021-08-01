<h1 class="text-primary"><i class="fa fa-user"></i> User Profile<small> My Profile</small>
</h1>
<ol class="breadcrumb">
    <li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li><a href=""><i class="fa fa-user"></i>Profile</a></li>
    <li class="active"><i class="fa fa-users"></i> All Users</>
    </li>
</ol>
<?php
    
    $session_user =  $_SESSION['user_login'];
    $user_data = mysqli_query($link,"SELECT * FROM `users` WHERE `username`='$session_user'");
    $user_row = mysqli_fetch_assoc($user_data);
    
   
?>
<div class="row">
    <div class="col-sm-6">
        <table class="table table-bordered">
            <tr>
                <td>User Id</td>
                <td><?php echo $user_row['id']; ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo $user_row['name']; ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo $user_row['username']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $user_row['email']; ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><?php echo ucwords($user_row['status']); ?></td>
            </tr>
            <tr>
                <td>Signup Date</td>
                <td><?php echo $user_row['datetime']; ?></td>
            </tr>
        </table>
        <a href="" class="btn btn-sm btn-info pull-right">Edit Profile</a>
    </div>
    <div class="col-sm-6">
        <a href="">
            <img style="width: 150px; hight: 150px;" src="Images/<?= $user_row['photo'];?>" alt="">
        </a>
        <br>
        <br>
        <?php 
                if(isset($_POST['Upload'])){
                        $photo = explode('.',$_FILES['photo']['name']);
                        $photo = end($photo);
                        $photo_name = $session_user.".".$photo;

                      $upload =  mysqli_query($link,"UPDATE `users` SET `photo`='$photo_name' WHERE `username` = '$session_user'");
                      if($upload){
                        move_uploaded_file($_FILES['photo']['tmp_name'],'Images/'.$photo_name);
                      }
                }
            ?>
        <form action="" enctype="multipart/form-data" method="POST">
            <label for="photo">Profile picture</label>
            <input type="file" name="photo" require="" id="photo">
            <br>
            <input type="submit" name="Upload" value="Upload" class="btn btn-sm btn-info">
        </form>
    </div>
</div>