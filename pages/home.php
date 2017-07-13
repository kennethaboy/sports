<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | Inventory System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <style>
    	.panel-body a{
    	  text-decoration:none!important;
    	  color:green!important;
        font-size: 18px;
    	}
      
	  </style>
 </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-green-light layout-top-nav">
    <div class="wrapper">
      <?php include('../dist/includes/header.php');?>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Dashboard
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Dashboard</li>
            </ol>
          </section>

          <!-- Main content -->
         <section>
           <div class = "row">
             <div class = "col-md-12">
                  <div class = "panel panel-success">
                      <div class = "panel-heading">
                        Maintenance
                      </div>
                      <div class = "panel-body">
                        <div class="col-md-2">
                          <h2 class="text-white text-center">
                                <a href="member.php"><i class="glyphicon glyphicon-user"></i><br> Members </a>
                          </h2>
                        </div>
                        <div class="col-md-2">
                          <h2 class="text-white text-center">
                                <a href="equipment.php"><i class="glyphicon glyphicon-compressed"></i><br> Equipment</a>
                          </h2>
                        </div>
                        <div class="col-md-2">
                          <h2 class="text-white text-center">
                            <a href="category.php"><i class="glyphicon glyphicon-tags"></i><br> Category</a>
                          </h2>
                        </div>
                        <div class="col-md-2">
                          <h2 class="text-white text-center">
                            <a href="course.php"><i class="glyphicon glyphicon-tasks"></i><br> Course</a>
                          </h2>
                        </div>
                        <div class="col-md-2">
                          <h2 class="text-white text-center">
                            <a href="gallery.php"><i class="glyphicon glyphicon-picture"></i><br> Gallery</a>
                          </h2>
                        </div>
                        <div class="col-md-2">
                          <h2 class="text-white text-center">
                                <a href="sports.php"><i class="glyphicon glyphicon-bullhorn"></i><br> Sports</a>
                          </h2>
                        </div>
                        <div class="col-md-2">
                          <h2 class="text-white text-center">
                                <a href="sy.php"><i class="glyphicon glyphicon-calendar"></i><br> School Year</a>
                          </h2>
                        </div>
                        <div class="col-md-2">
                          <h2 class="text-white text-center">
                                <a href="user.php"><i class="glyphicon glyphicon-user"></i><br> User </a>
                          </h2>
                        </div>
                      </div>
                  </div>
           </div>
           <div class = "col-md-12">
                <div class = "panel panel-success">
                    <div class = "panel-heading">
                      Transaction
                    </div>
                    <div class = "panel-body">
                      <div class="col-md-2">
                         <h2 class="text-white text-center">
                          <a href="athlete.php"><i class="glyphicon glyphicon-certificate"></i><br> Athlete</a>
                          </h2>
                      </div>
                      <div class="col-md-2">
                        <h2 class="text-white text-center">
                            <a href="member_select.php"><i class="glyphicon glyphicon-log-out"></i><br> Borrow </a> 
                        </h2>
                      </div>
                      <div class="col-md-2">
                        <h2 class="text-white text-center">
                          <a href="return.php"><i class="glyphicon glyphicon-log-in"></i><br> Return</a>
                        </h2>
                      </div>
                      <div class="col-md-2">
                         <h2 class="text-white text-center">
                          <a href="documents.php"><i class="glyphicon glyphicon-open"></i><br> Documents</a>
                          </h2>
                      </div>
                    </div>
             </div>
          </div>
             <div class = "col-md-12">
                  <div class = "panel panel-success">
                      <div class = "panel-heading">
                      Reports
                      </div>
                      <div class = "panel-body">
                        <div class="col-md-2">
                          <h2 class="text-white text-center">
                               <a href="coach.php"><i class="glyphicon glyphicon-user"></i><br> Coaches</a>
                          </h2>
                        </div>
                        <div class="col-md-2">
                          <h2 class="text-white text-center">
                               <a href="inventory.php"><i class="glyphicon glyphicon-list-alt"></i><br> Inventory</a>
                          </h2>
                        </div>
                        <div class="col-md-2">
                          <h2 class="text-white text-center">
                                <a href="return.php"><i class="glyphicon glyphicon-retweet"></i><br> Return</a>
                          </h2>
                        </div>
                       
                        <div class="col-md-2">
                          <h2 class="text-white text-center">
                                <a href="#archive" data-target="#archive" data-toggle="modal"><i class="glyphicon glyphicon-folder-open"></i><br>Archive</a>
                          </h2>
                        </div>

                        <div class="col-md-2">
                          <h2 class="text-white text-center">
                                <a href="statistics.php"><i class="glyphicon glyphicon-stats"></i><br>Statistics</a>
                          </h2>
                        </div>
                  </div>
             </div>
         </section>
<div id="archive" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Select Archive</h4>
              </div>
              <div class="modal-body">
        <form class="form-horizontal" method="post" action="archive.php" enctype='multipart/form-data'>
            <div class="form-group">
                <label class="control-label col-lg-3" for="date">Semester</label>
                <div class="col-md-8">
                    <select class="form-control" style="width: 100%;" name="sem" required>
                         <option>1st</option>
                         <option>2nd</option>
                    </select>
                </div><!-- /.input group -->
            </div><!-- /.form group -->
            <div class="form-group">
                <label class="control-label col-lg-3" for="date">School Year</label>
                <div class="col-md-8">
                    <select class="form-control select2" style="width: 100%;" name="sy" required>
                    <?php
                      $query2=mysqli_query($con,"select * from sy order by sy desc")or die(mysqli_error($con));
                          while($row2=mysqli_fetch_array($query2)){
                    ?>
                          <option><?php echo $row2['sy'];?></option>
                    <?php }?>
                    </select>
                </div><!-- /.input group -->
            </div><!-- /.form group -->
            
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-info">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
        </form>
        </div>
      
        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->               
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <?php include('../dist/includes/footer.php');?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
  </body>
</html>
