<?php 
  require_once "./dbcon.php";
  session_start();

  if(isset($_SESSION['user_login']))
{
    header("location:index.php");
}

  if(isset($_POST['login']))
  {
    $Username = $_POST['Username'];
    $password = $_POST['password'];

    $Username_check = mysqli_query($link, "SELECT * FROM `users` WHERE `username`='$Username'");
    if(mysqli_num_rows($Username_check) > 0)
    {
      $row = mysqli_fetch_assoc($Username_check);
      
      if($row['password'] == md5($password))
      {
        if($row['status'] == 'active'){
          $_SESSION['user_login'] = $Username; 
          header('location:index.php');
        }
        {
          $status_inactive = "The status is inactive, So please try again";
        }
      }else{
        $wrong_password = "The Password not found here, You can try again";
      }

    }else{
      $Username_not_found = "The Username not found here, You can try again";
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
    <title>Student Management System</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
   
  </head>
  <body style="background: #f5f5f5">
    <div class="container">
      <h1 class="text-center">Student Management System</h1>
      <br>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <h2 class="text-center">Admin Login Form</h2>
          <form action="login.php" method="POST">
                <div>
                    <input type="text" placeholder="Username" name="Username" require="" class="form-control" value="<?php if(isset($Username)){echo $Username;} ?>">
                </div>
                
                <div>
                    <input type="password" placeholder="password" name="password" require="" class="form-control" value="<?php if(isset($password)){echo $password;} ?>">
                </div>
                <br>
                <div>
                    <a href="">Back</a>
                    <input class="btn btn-info pull-right" type="submit" value="login" name="login">
                </div>
          </form>
        </div>
      </div>
      <?php if(isset($Username_not_found)){echo '<div class="alert alert-danger col-sm-4 col-sm-offset-4">'.$Username_not_found.'</div>';} ?>
      <?php if(isset($wrong_password)){echo '<div class="alert alert-danger col-sm-4 col-sm-offset-4">'.$wrong_password.'</div>';} ?>
      <?php if(isset($status_inactive)){echo '<div class="alert alert-danger col-sm-4 col-sm-offset-4">'.$status_inactive.'</div>';} ?>
    </div>
  </body>
</html>