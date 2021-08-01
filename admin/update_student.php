<h1 class="text-primary"><i class="fa fa-pencil-square-o"></i>Update Student<small>Update Student</small>
</h1>
<ol class="breadcrumb">
    <li><a href="index.php?page=dashboard"> <i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="index.php?page=all-student"> <i class="fa fa-users"></i> All Student</a></li>
    <li class="active"><i class="fa fa-pencil-square-o"></i> Update Student</>
    </li>
</ol>
<?php 
    require_once"./dbcon.php";
    $id = ($_GET['id']);
    $db_data = mysqli_query($link, "SELECT * FROM student_infos WHERE id='$id'");
    $db_row = mysqli_fetch_assoc($db_data);
    
    if(isset($_POST['update_student']))
    {
        $name = $_POST['name'];
        $class = $_POST['class'];
        $roll = $_POST['roll'];
        $city = $_POST['city'];
        $contract = $_POST['contract'];
       
        $query ="UPDATE `student_infos` SET `name`='$name',`class`='$class',`roll`='$roll',`city`='$city',`contract`='$contract' WHERE 'id'='$id'";
        $result = mysqli_query($link,$query);
        if($result){
            header('location:index.php?page=all-student');
        }
        
    }
   
?>
<div class="row">
    <div class="col-sm-6">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control" value="<?=$db_row['name']?>">
            </div>
            <div class="form-group">
                <label for="class">Student Class</label>
                <select name="class" class="form-control" id="class" required="">
                    <option value="">Select</option>
                    <option <?php echo $db_row['class']=='1th' ? 'selected =""':''; ?> value="1th">1st</option>
                    <option <?php echo $db_row['class']=='2th' ? 'selected =""':''; ?> value="2th">2nd</option>
                    <option <?php echo $db_row['class']=='3th' ? 'selected =""':''; ?> value="3th">3rd</option>
                    <option <?php echo $db_row['class']=='4th' ? 'selected =""':''; ?> value="4th">4th</option>
                    <option <?php echo $db_row['class']=='5th' ? 'selected =""':''; ?> value="5th">5th</option>
                </select>
            </div>
            <div class="form-group">
                <label for="roll">Student Roll</label>
                <input type="text" name="roll" placeholder="Student Roll" id="roll" class="form-control"
                    pattern="[0-9]{6}" required="" value="<?=$db_row['roll']?>" />
            </div>
            <div class="form-group">
                <label for="city">Student City</label>
                <input type="text" name="city" placeholder="Student city" id="city" class="form-control" required="" value="<?=$db_row['city']?>" />
            </div>
            <div class="form-group">
                <label for="contract">Student P_contract</label>
                <input type="text" name="contract" placeholder="Student Contract" id="contract" class="form-control"
                    required="" value="<?=$db_row['contract']?>" />
            </div>
            <div class="form-group">

                <input type="submit" value="update_student" name="update_student" class="btn btn-primary pull-right">

            </div>
        </form>
    </div>
</div>