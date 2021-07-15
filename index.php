<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Students Management System</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background: #f5f5f5">
    <div class="container">
    <br>
    <div class=""><a class="btn btn-primary pull-right" href="admin/login.php">Login</a> </div>
    <br>
    <br>
    <h1 class="text-center">Welcome to Students Management System</h1>
    <br>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4 text-center">
        <form action="" method="POST">
        <table class="table table-bordered">
            <tr>
                <td colspan="2"><label>Student Information</label></td>
            </tr>
            <tr>
                <td><label for="Choose">Choose Class</label></td>
                <td>
                    <select class="form-control" id="choose" name="choose">
                    <option value="">Select</option>
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                    <option value="5">5th</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="roll">Roll</label></td>
                <td><input class="form-control" type="text" name="roll" pattern="[0-9]{6}" placeholder="Roll"></td>
            </tr>
            <tr>
                <td colspan="2"><input class="btn btn-default" type="submit" value="show info" name="show_info"></td>
            </tr>
        </table>
    </form>
        </div>
    </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>