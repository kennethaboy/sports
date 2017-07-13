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
    <title>Home | <?php include('../dist/includes/title.php');?></title>
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
    <script src="../dist/js/jquery.min.js"></script>
   
 </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-green-light layout-top-nav" onload="myFunction()">
    <div class="wrapper">
      <?php include('../dist/includes/header.php');?>
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
              <li class="active">Equipments</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-md-4">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Borrower's Name</h3>
                </div>
                <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="">
                    <div class="row" style="min-height:400px">
          
                       <div class="col-md-12">
                          <div class="form-group">
                            <label for="date">Borrower's Name</label>
                            <select class="form-control select2" name="borrower" tabindex="1" autofocus required>
                            <?php
                              include('../dist/includes/dbcon.php');
                               $query2=mysqli_query($con,"select * from member order by member_last,member_first")or die(mysqli_error());
                                  while($row=mysqli_fetch_array($query2)){
                            ?>
                                <option value="<?php echo $row['member_id'];?>"><?php echo $row['member_last'].", ".$row['member_first'];?></option>
                              <?php }?>
                            </select>
                          </div><!-- /.form group -->
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="date"></label>
                          <div class="input-group">
                            <button class="btn btn-lg btn-block btn-info" type="submit" tabindex="3" name="addtocart">Find</button>
                          </div>
                        </div>  
                      </div>
                  </div>
              </form> 
            </div>
           </div>
          </div> 
        <div class="col-md-8">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Return Equipment/s</h3>
                </div>
                <div class="box-body">
                  <!-- Date range -->
               
          
          <div class="col-md-12">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Equipment Name</th>
                        <th>Qty</th>
                        <th>Borrowed Date</th>
                        <th>Returned Date</th>
                        <th>Status</th>
                        <th>Return</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
    $bid=$_REQUEST['borrower'];
    $query=mysqli_query($con,"select * from borrow natural join equipment where member_id='$bid' order by date_borrowed")or die(mysqli_error($con));
        while($row=mysqli_fetch_array($query)){
            $id=$row['borrow_id'];
    
            if($row['status']==1) {
              $status="returned";
              $badge="green";
            }
            else 
              {
                $status= "unreturned";
                $badge="red";
              }
?>
                    <tr>
                        <td class="record"><?php echo $row['equipment_name'];?></td>
                        <td><?php echo $row['borrow_qty'];?></td>
                        <td><?php echo date("M d Y h:i A", strtotime($row['date_borrowed']));?></td>
                        <td><?php echo date("M d Y h:i A", strtotime($row['date_returned']));?></td>
                        <td><span class='badge bg-<?php echo $badge;?>'><?php echo $status; ?></span></td>
                        <td>
                          
                          <a href="#delete<?php echo $row['borrow_id'];?>" data-target="#delete<?php echo $row['borrow_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-trash text-red"></i></a>
                          
                        </td>
                    </tr>
            
<div id="delete<?php echo $row['borrow_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Return Borrowed Equipment/s</h4>
              </div>
              <div class="modal-body">
        <form class="form-horizontal" method="post" action="return_add.php" enctype='multipart/form-data'>
          <input type="hidden" class="form-control" name="borrow_id" value="<?php echo $id;?>" required>   
          <input type="hidden" class="form-control" name="borrower" value="<?php echo $bid;?>" required>   
          <input type="hidden" class="form-control" id="price" name="qty" value="<?php echo $row['borrow_qty'];?>" required> 
          <input type="hidden" class="form-control" id="price" name="eid" value="<?php echo $row['equipment_id'];?>" required>  
        <p><?php echo $row['equipment_name'];?> already returned?</p>
        
              </div><br>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              </div>
        
            </div>
      
        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->  
<?php }?>           
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->

        </div>  
               
                  
                  
        </form> 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
            
            
      
      
          </div><!-- /.row -->
    
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <?php include('../dist/includes/footer.php');?>
    </div><!-- ./wrapper -->
  <script>
  
    $("#credit").click(function(){
        $("#tendered").hide('slow');
        $("#change").hide('slow');
      });

      $("#cash").click(function(){
          $("#tendered").show('slow');
          $("#change").show('slow');
      });

    $(function() {

      $(".btn_delete").click(function(){
      var element = $(this);
      var id = element.attr("id");
      var dataString = 'id=' + id;
      if(confirm("Sure you want to delete this item?"))
      {
  $.ajax({
  type: "GET",
  url: "temp_trans_del.php",
  data: dataString,
  success: function(){
    
        }
    });
    
    $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
    .animate({ opacity: "hide" }, "slow");
      }
      return false;
      });

      });
    </script>
  
  <script type="text/javascript" src="autosum.js"></script>
    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <script src="../dist/js/jquery.min.js"></script>
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
          "ordering": true,x`
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
          radioClass: 'iradio_minimal-blue'
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
