<h1 class="text-primary"><i class="fa fa-user-plus"></i>Add Student<small>Add New Student</small>
</h1>
<ol class="breadcrumb">
    <li><a href="index.php?page=dashboard"> <i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-user-plus"></i> Add Student</>
    </li>
</ol>

<?php 
    if(isset($_POST['add-student']))
    {
        $name = $_POST['name'];
        $class = $_POST['class'];
        $roll = $_POST['roll'];
        $city = $_POST['city'];
        $contract = $_POST['contract'];
        
        $picture = explode('.',$_FILES['picture']['name']);
        $picture_ex = end($picture);

        $picture_name = $roll.'.'.$picture_ex;  

        $query = "INSERT INTO `student_infos`(`name`, `class`, `roll`, `city`, `contract`, `photo`) VALUES ('$name','$class','$roll','$city','$contract','$picture_name')";
        $result = mysqli_query($link,$query);

        if(isset($result)){
            $success = "Data insert success";
            move_uploaded_file($_FILES['picture']['tmp_name'],'student_images/'.$picture_name);

        }else{
            $error = "Data insert fail";
        }
        
    }
?>
<div class="row">
    <?php if(isset($success)){echo '<p class="alert alert-success col-sm-6">'.$success.'</p>';} ?>
    <?php if(isset($error)){echo '<p class="alert alert-danger col-sm-6">'.$error.'</p>';} ?>

</div>
<div class="row">
    <div class="col-sm-6">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="class">Student Class</label>
                <select name="class" class="form-control" id="class" required="">
                    <option value="">Select</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                    <option value="5th">5th</option>
                </select>
            </div>
            <div class="form-group">
                <label for="roll">Student Roll</label>
                <input type="text" name="roll" placeholder="Student Roll" id="roll" class="form-control"
                    pattern="[0-9]{6}" required="" />
            </div>
            <div class="form-group">
                <label for="city">Student City</label>
                <input type="text" name="city" placeholder="Student city" id="city" class="form-control" required="" />
            </div>
            <div class="form-group">
                <label for="contract">Student P_contract</label>
                <input type="text" name="contract" placeholder="Student Contract" id="contract" class="form-control"
                    required="" />
            </div>
            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="file" name="picture" id="picture" required="" />
            </div>
            <div class="form-group">

                <input type="submit" value="Add-Student" name="add-student" class="btn btn-primary pull-right">

            </div>
        </form>
    </div>
</div>