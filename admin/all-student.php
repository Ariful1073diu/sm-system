<h1 class="text-primary"><i class="fa fa-users"></i> All Students<small> All Students</small>
</h1>

<ol class="breadcrumb">
    <a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
    <li class="active"><i class="fa fa-users"></i>  All Students</>
    </li>
</ol>

<div class="table-responsive">
    <table id="Data" class="table table-hover table-bordered table-striped text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>City</th>
                <th>Contract</th>
                <th>photo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                                   $db_sinfo =  mysqli_query($link, "SELECT * FROM `student_infos`");
                                   while ($row = mysqli_fetch_assoc($db_sinfo)){?>

                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo ucwords($row['name']); ?></td>
                                        <td><?php echo $row['roll']; ?></td>
                                        <td><?php echo ucwords($row['city']); ?></td>
                                        <td><?php echo $row['contract']; ?></td>
                        
                                        <td><img style="width: 100px" src="student_images/<?php echo $row['photo']; ?>" alt=""></td>
                                        <td>
                                            <a href="update_student.php" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i>  Edit</a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="delete_student.php?id=<?php echo ($row['id']); ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>  Delete</a>
                                        </td>
                                    </tr>
                                    <?php  
                                                           }
                                ?>
        </tbody>

    </table>
</div>