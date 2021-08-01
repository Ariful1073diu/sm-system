<h1 class="text-primary"><i class="fa fa-users"></i> All Users<small> All Users</small>
</h1>

<ol class="breadcrumb">
    <a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
    <li class="active"><i class="fa fa-users"></i>  All Users</>
    </li>
</ol>

<div class="table-responsive">
    <table id="Data" class="table table-hover table-bordered table-striped text-center">
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>photo</th>
                <th>Action</th>       
            </tr>
        </thead>
        <tbody>
            <?php
                                   $db_sinfo =  mysqli_query($link, "SELECT * FROM `users`");
                                   while ($row = mysqli_fetch_assoc($db_sinfo)){?>

                                    <tr>
                                        
                                        <td><?php echo ucwords($row['name']); ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><img style="width: 100px" src="Images/<?php echo $row['photo']; ?>" alt=""></td>
                                        <td>
                                            <a href="index.php?page=update_user&id=<?php echo ($row['id']); ?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i>  Edit</a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>  Delete</a>
                                        </td>
                                    </tr>
                                    <?php  
                                                           }
                                ?>
        </tbody>

    </table>
</div>