<?php 
  include('../dist/includes/dbcon.php');
  $query=mysqli_query($con,"select * from settings")or die(mysqli_error($con));
    $row=mysqli_fetch_array($query);
    $sem=$row['sem'];
    $sy=$row['sy'];
?> 
      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header" style="padding-left:20px">
              <a href="home.php" class="navbar-brand"><b>ATHLETICS OFFICE INFORMATION SYSTEM</b></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->

                  <!-- Notifications Menu -->
                  <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="glyphicon glyphicon-refresh"></i>Unreturned Equipment/s
                      <span class="label label-danger">
                      <?php 
                      
                      $query=mysqli_query($con,"select COUNT(*) as count from borrow where status='0'")or die(mysqli_error());
		                    	$row=mysqli_fetch_array($query);
		                      echo $row['count'];
			                 ?>	
                      </span>
                    </a>
                    
                  </li>
                  <!-- Notifications Menu -->
                  <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="settings.php">
                      <span class="badge badge-danger"><?php echo $sem." sem S.Y. ".$sy;?></span>
                      <i class="glyphicon glyphicon-cog"></i>Settings
                    </a>
                    
                  </li>
                  <!-- Tasks Menu -->
                  <li class="">
                    <!-- Menu Toggle Button -->
                    <a href="logout.php" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-off"></i>Logout
                      
                    </a>
                  </li>
                  
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>