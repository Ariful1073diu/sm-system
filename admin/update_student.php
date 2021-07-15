<h1 class="text-primary"><i class="fa fa-pencil-square-o"></i>Update Student<small>Update Student</small>
</h1>
<ol class="breadcrumb">
    <li><a href="index.php?page=dashboard">Dashboard</a></li>
    <li><a href="all-student.php?page=all-student">All Student</a></li>
    <li class="active"><i class="fa fa-pencil-square-o"></i> Update Student</li>
    </li>
</ol>

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
                    <option value="1th">1st</option>
                    <option value="2th">2nd</option>
                    <option value="3th">3rd</option>
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

                <input type="submit" value="updateStudent" name="update_student" class="btn btn-primary pull-right">

            </div>
        </form>
    </div>
</div>