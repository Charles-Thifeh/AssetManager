<html lang = "en">
    <head>
        <title>Asset Manager</title>
        <!--- Required meta tags --->
        <meta charset = "utf-8">
        <meta name = "viewport" content="width=device-width, initial-scale = 1,  shrink-to-fit = no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/fonts.css">
    </head>
    <body class="fixed-nav" style="height: auto">
        <header style="height: 60px;">
        <nav class="navbar navbar-dark fixed-top bg-dark">
            <div class = "container-fluid" style="color: whitesmoke" >
                <h4 style="margin-top: 10px">Asset Manager [<?php echo $organization?>]</h4>
                <ul class="nav nav-pills justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="signout.php" style="height: 35px; font-size: 13px; color: white">Sign Out</a>
                </li>
                </ul>
            </div>
        </nav>
        </header>

        <div class= "container-fluid">
            <div class="row in-line">
            <div class="col-md-2 bg-dark fixed-nav" style="height: 100%; color: white; position:relative; width: 20%;">
                <br>
                <ul class="navbar-nav navbar-sidenav fixed-nav" >
                    <li class="nav-item text-center">
                    <h5>Dashboard</h5><img src="img/1.png" style="height: 38px">
                  </li>
                    <li class="nav-item" >
                      <a class="nav-link" href="add_inc.php" style="color: white; font-size:13px " >
                          <img src="img/7.png" style="height: 14px">
                          Add Asset</a>
                    </a>
                    </li>
                    <li class="nav-item" >
                      <a class="nav-link" href="view_inc.php" style="color: white; font-size:13px " >
                        <img src="img/2.png" style="height: 14px">
                          View Asset</a>
                    </li>
                    <li class="nav-item" >
                      <a class="nav-link" href="#" style="color: white; font-size:13px " >
                        <img src="img/4.png" style="height: 14px">
                          Update Asset</a>
                    </li>
                    <li class="nav-item" >
                      <a class="nav-link" href="delete_inc.php" style="color: white; font-size:13px " >
                        <img src="img/6.png" style="height: 14px">
                          Delete Asset</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="#" style="color: white; font-size:13px " >
                          <img src="img/3.png" style="height: 14px">
                            Monthly Report</a>
                    </li>
                    <li class="nav-item" >
                      <a class="nav-link" href="#" style="color: white; font-size:13px " >
                        <img src="img/5.png" style="height: 14px">
                          My Profile</a>
                    </li>
                </ul>
                <br><br><br><br><br><br><br><br><br><br><br>
            </div>
            <div class="col-md-10" style="width: 80%">
              <div class= "row">
              <div class="col-md-12" style="height: 20px;"></div>
              <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header">
                      <i class="fa fa-table"></i>
                      <form role='form' method='POST'>
                      <div class='row'>
                        <div class="form-group in-line col-sm-6">
                            <input type = "text" name = "id"  class= "form-control" placeholder="Input Asset Id" style="margin-left: 75%;">
                        </div>
                        <div class="form-group in-line col-sm-6">
                            <input class="btn btn-primary" type="submit" value="Delete" name="submit" style="margin-left: 75%;">
                        </div>
                        </div>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-bordered table-hover table-sm" id="" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>Asset Id</th>
                                  <th>Name</th>
                                  <th>Date of Purchase</th>
                                  <th>Type</th>
                                  <th>Inital Cost</th>
                                  <th>Description</th>
                                </tr>
                                </thead>
                                
                                <tbody id=''>
                                <?php
                                $table = strtolower($organization);
                                $query3 = "SELECT `asset_id`, `name`, `date_of_purchase`, `type`, `initial_cost`, `description` FROM `$table`";
                                if ($query_run3 = mysqli_query($conn, $query3)){
                                  
                                    while ($query_row = mysqli_fetch_assoc($query_run3)){
                                        // $query_row = mysqli_fetch_assoc($query_run3);
                                        $asset_id = $query_row['asset_id'];
                                        $name = $query_row['name'];
                                        $date_of_purchase = $query_row['date_of_purchase'];
                                        $type = $query_row['type'];
                                        $initial_cost = $query_row['initial_cost'];
                                        $description = $query_row['description'];
                                        echo "
                                                    <tr>
                                                    <td>$asset_id</td>
                                                    <td>$name</td>
                                                    <td>$date_of_purchase</td>
                                                    <td>$type</td>
                                                    <td>$initial_cost</td>
                                                    <td>$description</td>
                                                    </tr>
                                                  "
                                                   ;
                                    }
                                  } else{
                                    echo mysqli_error();
                                  }
                                    require 'connect_inc.php';
                                    require 'core.inc.php';

                                    if(isset($_POST['submit'])&& isset($_POST['id'])){
                                        $id = $_POST['id'];
                                        $query = "DELETE FROM `$table` WHERE `asset_id` = '$id'";
                                        if(mysqli_query($conn, $query)){
                                            echo "<script>alert ('Success!')</script>";
                                        }else{
                                            echo "<script>alert ('Try again!')</script>";
                                        }
                                    }

                                ?>    
                                </tbody>
                                </table>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>

</html>
