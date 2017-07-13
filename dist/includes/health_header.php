<?php 
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
?>
<header class="main-header">
        <!-- Logo -->
        <a href="home.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b><i class="glyphicon glyphicon-home"></i></b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>EBrgy</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="navigation">
				<span class="glyphicon glyphicon-align-justify" style="float:left;z-index:10000"></span>
                

          </a>
          <?php
			include('dbcon.php');
		  
	      ?>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
	     
              <li class="dropdown user user-menu">
		
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		  Welcome
                  <img src="../dist/img/<?php echo $_SESSION['pic'];?>" class="user-image" alt="User Image">
                  <span class="hidden-xs">
                  <?php
		    echo $_SESSION['name'];
                    ?>!
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../dist/img/<?php echo $_SESSION['pic'];?>" class="img-circle" alt="User Image">
                    <p>
                      <?php
                        echo $_SESSION['name'];
                    ?>
                      
                    </p>
                  </li>
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                   
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-danger btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>