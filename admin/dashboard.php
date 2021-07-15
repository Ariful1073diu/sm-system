
                    <h1 class="text-primary"><i class="fa fa-dashboard"></i>Dashboard<small>Statistics Overview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                        <li class="active"><i class="fa fa-users"></i> All Users</>
                        </li>
                    </ol>
                    
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="pull-right" style="font-size: 45px">10</div>
                                            <div class="clearfix"></div>
                                            <div class="pull-right">All student</div>
                                        </div>
                                    </div>

                                </div>
                                <a href="">
                                    <div class="panel-footer">
                                        <span class="pull-left">All Student</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="pull-right" style="font-size: 45px">10</div>
                                            <div class="clearfix"></div>
                                            <div class="pull-right">All student</div>
                                        </div>
                                    </div>

                                </div>
                                <a href="">
                                    <div class="panel-footer">
                                        <span class="pull-left">All Student</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="pull-right" style="font-size: 45px">10</div>
                                            <div class="clearfix"></div>
                                            <div class="pull-right">All student</div>
                                        </div>
                                    </div>

                                </div>
                                <a href="">
                                    <div class="panel-footer">
                                        <span class="pull-left">All Student</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3>New Students</h3>
                    <div class="table-responsive">
                        <table id="Data" class="table table-hover table-bordered table-striped text-center">
                            <thead >
                                <tr >
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
                                   $db_sinfo =  mysqli_query($link, "SELECT * FROM `student_infos` ");
                                  
                                   while($row = mysqli_fetch_assoc($db_sinfo)){?>
                                 
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
                                            <a href="delete_student.php?id=<?php echo base64_encode($row['id']); ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>  Delete</a>
                                        </td>
                                    </tr>
                                    <?php   
                                       } 
                                   
                                ?>
                            </tbody>

                        </table>
                    </div>