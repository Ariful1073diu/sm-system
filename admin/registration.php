<?php
  require_once "./dbcon.php";
  session_start();
  if(isset($_POST['registration'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Username = $_POST['Username'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    $photo = explode('.',$_FILES['photo']['name']);
    $photo = end($photo);
    $photo_name = $Username.".".$photo;

    $input_error = array();

    if(empty($name))
    {
      $input_error['name'] = "The name field is required";
    }
    if(empty($email))
    {
      $input_error['email'] = "The email field is required";
    }
    if(empty($Username))
    {
      $input_error['Username'] = "The Username field is required";
    }
    if(empty($password))
    {
      $input_error['password'] = "The password field is required";
    }
    if(empty($c_password))
    {
      $input_error['c_password'] = "The C_password field is required";
    }
    if(count($input_error) == 0)
    {
     $email_check = mysqli_query($link,"SELECT * FROM `users` WHERE `email`='$email';");
     if(mysqli_num_rows($email_check) == 0)
     {
      $Username_check = mysqli_query($link,"SELECT * FROM `users` WHERE `Username`='$Username';");
       if(mysqli_num_rows($Username_check) == 0)
       {
         if(strlen($Username) > 7)
         {
           if(strlen($password) > 6)
           {
             if($password == $c_password){

              $password = md5($password);
              $c_password = md5($c_password);

              $qurry ="INSERT INTO `users`( `name`, `email`, `username`, `password`, `c_password`, `photo`, `status`) VALUES ('$name','$email','$Username','$password','$c_password','$photo_name','Inactive')";

              $result = mysqli_query($link,$qurry);
              if($result)
              {
                $_SESSION['date_insert_success'] = "Data insert Success";
                move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo_name);
                
                header('location: registration.php');
              }else
              {
                $_SESSION['date_insert_error'] = "Data insert fail";
              }


             
             }else{
               $password_not_match = "The password not match, So please try again";
             }
            
           }else
           {
             $password_l = "Password more the 6 character";
           }
           
         }else{
           $Username_l = "Username more then 8 character";
         }
       }else{
        $Username_error ="This Username already exist";
       }
     }
     else
    {
      $email_error ="This email already exist";
    }
    
    }
    
  }
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Registration Form</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" class="css">
   
  </head>
  <body style="background: #f5f5f5">
    <div class="container">
    <h1 class="text-center">User Registration Form</h1>
    <?php if(isset($_SESSION['date_insert_success'])){echo '<div class="alert alert-success">'.$_SESSION['date_insert_success'].'</div>';}?>
  
    <?php if(isset($_SESSION['date_insert_error'])){echo '<div class="alert alert-warning">'.$_SESSION['date_insert_error'].'</div>';}?>
    <hr>
    <div class="row">
      <div class="col-md-12 text-center">
        <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal text-center">
            <div class="form-group">
            <label for="name" class="control-level col-sm-1">Name</label>
            <div class="col-sm-4">
            <input class="form-control" type="text" id="name" name="name" placeholder="Enter You Name" value="<?php if(isset($name)){echo $name;} ?>">
            </div>
            <label class="error">
              <?php if(isset($input_error['name'])){echo $input_error['name'];} ?>
            </label>
            </div>
            <div class="form-group">
            <label for="email" class="control-level col-sm-1">Email</label>
            <div class="col-sm-4">
            <input class="form-control" type="email" id="email" name="email" placeholder="Enter You Email" value="<?php if(isset($email)){echo $email;} ?>">
            </div>
            <label class="error">
              <?php if(isset($input_error['email'])){echo $input_error['email'];} ?>
            </label>
            <label class="error">
              <?php if(isset($email_error)){echo $email_error;} ?>
            </label>
            </div>
            <div class="form-group">
            <label for="Username" class="control-level col-sm-1">Username</label>
            <div class="col-sm-4">
            <input class="form-control" type="text" id="Username" name="Username" placeholder="Enter You Username" value="<?php if(isset($Username)){echo $Username;} ?>">
            </div>
            <label class="error">
              <?php if(isset($input_error['Username'])){echo $input_error['Username'];} ?>
            </label>
            <label class="error">
              <?php if(isset($Username_error)){echo $Username_error;} ?>
            </label>
            <label class="error"><?php if(isset($Username_l)){echo $Username_l;} ?></label>
            </div>
            <div class="form-group">
            <label for="password" class="control-level col-sm-1">Password</label>
            <div class="col-sm-4">
            <input class="form-control" type="password" id="password" name="password" placeholder="Enter You Password" value="<?php if(isset($password)){echo $password;} ?>">
            </div>
            <label class="error">
              <?php if(isset($input_error['password'])){echo $input_error['password'];} ?>
            </label>
            <label class="error"><?php if(isset($password_l)){echo $password_l;}?></label>
            </div>
            <div class="form-group">
            <label for="c_password" class="control-level col-sm-1">Confirm Password</label>
            <div class="col-sm-4">
            <input class="form-control" type="password" id="c_password" name="c_password" placeholder="Enter You Confirm Password" value="<?php if(isset($c_password)){echo $c_password;} ?>">
            </div>
            <label class="error">
              <?php if(isset($input_error['c_password'])){echo $input_error['c_password'];} ?>
            </label>
            <label class="error"><?php if(isset($password_not_match)){ echo $password_not_match;}?></label>
            </div>
            <div class="form-group">
            <label for="photo" class="control-level col-sm-1">Photo</label>
            <div class="col-sm-4">
            <input  type="file" id="photo" name="photo">
            </div>
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <input type="submit" value="registration" name="registration" class="btn btn-primary">
                
            </div>
              
               
            
        </form>
        
      </div>
      
    </div>
                <br>
                <br>
                <div>
            <p>If you have an account?then please <a href="login.php">Login</a></p>
            </div>
    <br>
            <hr>
            <footer>
              <p>Copyright$copy:2016 - <?= date('Y')?> All Right Reserved</p>
            </footer>
    </div>
  </body>
</html>