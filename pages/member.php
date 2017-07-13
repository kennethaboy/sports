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
    <title>Member | <?php include('../dist/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <style>
      
    </style>
 </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-green-light layout-top-nav">
    <div class="wrapper">
      <?php include('../dist/includes/header.php');
      include('../dist/includes/dbcon.php');
      ?>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              <a class="btn btn-lg btn-info" href="home.php">Back</a>
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Member</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-3">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Member</h3>
                </div>
                <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="member_add.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="date">Last Name</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right" id="date" name="last" placeholder="Last Name" required>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  <div class="form-group">
                    <label for="date">First Name</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right" id="date" name="first" placeholder="First Name" required>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  <div class="form-group">
                    <label for="date">Course</label>
                    <div class="input-group col-md-12">
                        <select class="form-control select2" style="width: 70%;" name="course" required>
                        <?php
                          $query2=mysqli_query($con,"select * from course order by course")or die(mysqli_error());
                              while($row2=mysqli_fetch_array($query2)){
                        ?>
                              <option value="<?php echo $row2['course'];?>"><?php echo $row2['course_title'];?></option>
                        <?php }?>
                        </select>
                    </div><!-- /.input group -->
                </div><!-- /.form group -->
                <div class="form-group">
                    <label for="date">Year and Section</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right" id="date" name="ys" placeholder="Year and Section" required>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                <div class="form-group">
                  <label class="control-label" for="date">Gender</label>
                  <div class="input-group col-md-12">
                      <select class="form-control select2" style="width: 100%;" name="gender" required>
                            <option>Male</option>
                            <option>Female</option>
                      </select>
                  </div><!-- /.input group -->
              </div><!-- /.form group -->
              <div class="form-group">
                    <label for="date">Address</label>
                    <div class="input-group col-md-12">
                      <textarea class="form-control pull-right" id="date" name="address" placeholder="Complete Address" required></textarea>
                    </div><!-- /.input group -->
              </div><!-- /.form group -->

		              <div class="form-group">
                    <label for="date">Member Type</label>
                    <div class="input-group col-md-12">
                      <select class="form-control select2" style="width: 100%;" name="type" required>
                        <option>Student</option>
                        <option>Faculty</option>
                        <option>Staff</option>
                    </select>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                  <div class="form-group">
                    <div class="input-group">
                      <button class="btn btn-info btn-lg" id="daterange-btn" name="">
                        Save
                      </button>
					             <button class="btn btn-lg" id="daterange-btn" type="reset">
                        Clear
                      </button>
                    </div>
                  </div><!-- /.form group -->
				</form>	
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
            
            <div class="col-xs-9">
              <div class="box box-success">
    
                <div class="box-header">
                  <h3 class="box-title">Member List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Gender</th>
                        <th>Course</th>
                        <th>Year & Section</th>
                        <th>Address</th>
                  			<th>Member Type</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
		
		$query=mysqli_query($con,"select * from member natural join course")or die(mysqli_error($con));
		    while($row=mysqli_fetch_array($query)){
		
?>
                      <tr>
                        <td><?php echo $row['member_last'];?></td>
                        <td><?php echo $row['member_first'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['course'];?></td>
                        <td><?php echo $row['ys'];?></td>
                        <td><?php echo $row['address'];?></td>
                        <td><?php echo $row['member_type'];?></td>
                        <td>
			
				<a href="#update<?php echo $row['member_id'];?>" data-target="#update<?php echo $row['member_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-edit text-blue"></i></a>
				
						</td>
                      </tr>
<div id="update<?php echo $row['member_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
	  <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Update Member Details</h4>
              </div>
              <div class="modal-body">
			  <form class="form-horizontal" method="post" action="member_update.php" enctype='multipart/form-data'>
                
				<div class="form-group">
					<label class="control-label col-lg-3" for="name">Last Name</label>
					<div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['member_id'];?>" required>  
					  <input type="text" class="form-control" id="name" name="last" value="<?php echo $row['member_last'];?>" required>  
					</div>
				</div> 
				<div class="form-group">
					<label class="control-label col-lg-3" for="file">First Name</label>
					<div class="col-lg-9">
            <input type="text" class="form-control" id="name" name="first" value="<?php echo $row['member_first'];?>" required>  
          </div>
				</div> 
        <div class="form-group">
            <label class="control-label col-lg-3" for="date">Course</label>
            <div class="col-md-9">
                <select class="form-control select2" style="width: 100%;" name="course" required>
                      <option value="<?php echo $row['course'];?>"><?php echo $row['course_title'];?></option>
                <?php
                  $query2=mysqli_query($con,"select * from course order by course")or die(mysqli_error($con));
                      while($row2=mysqli_fetch_array($query2)){
                ?>
                      
                      <option value="<?php echo $row2['course'];?>"><?php echo $row2['course_title'];?></option>
                <?php }?>
                </select>
            </div><!-- /.input group -->
        </div><!-- /.form group -->
        <div class="form-group">
          <label class="control-label col-lg-3" for="file">Year & Section</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="name" name="ys" value="<?php echo $row['ys'];?>" required>  
          </div>
        </div> 
        <div class="form-group">
            <label class="control-label col-lg-3" for="date">Gender</label>
            <div class="col-md-9">
                <select class="form-control select2" style="width: 100%;" name="gender" required>
                      <option><?php echo $row['gender'];?></option>
                      <option>Male</option>
                      <option>Female</option>
                </select>
            </div><!-- /.input group -->
        </div><!-- /.form group -->
        <div class="form-group">
          <label class="control-label col-lg-3" for="file">Address</label>
          <div class="col-lg-9">
            <textarea class="form-control" id="name" name="address"><?php echo $row['address'];?></textarea>
          </div>
        </div> 
				<div class="form-group">
          <label class="control-label col-lg-3" for="file">Member Type</label>
            <div class="col-lg-9">
              <select class="form-control select2" style="width: 100%;" name="type" required>
                        <option><?php echo $row['member_type'];?></option>
                        <option>Student</option>
                        <option>Faculty</option>
                        <option>Staff</option>
                    </select>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				
              </div><br><br><br><hr>
              <div class="modal-footer">
		            <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
			  </form>
        </div>
			
        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->                    
<?php }?>					  
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Gender</th>
                        <th>Course</th>
                        <th>Year & Section</th>
                        <th>Address</th>
                        <th>Member Type</th>
                        <th>Action</th> 
                      </tr>					  
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
 
            </div><!-- /.col -->
			
			
          </div><!-- /.row -->
	  
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <?php include('../dist/includes/footer.php');?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../plugins/select2/select2.full.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
     <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-skin-green-light'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
  </body>
</html>
