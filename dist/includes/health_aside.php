
<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- search form -->
         
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li>
            <div class="user-panel">
            <div class="pull-left image">
              <img src="../dist/img/<?php echo $_SESSION['pic'];?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['name'];?></p>
              <a href="#"><i class="glyphicon glyphicon-dashboard text-success"></i> Online</a>
            </div>
          </div>
          </li>
          
            <li class="treeview">
              <a href="">
                <i class="glyphicon glyphicon-tint"></i>
                <span>Treatment Record</span>
                <i class="glyphicon glyphicon-menu-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
		<li><a href="treatment.php"><i class="glyphicon glyphicon-plus"></i>Add Treatment</a></li>	
		<li><a href="treatment_list.php"><i class="glyphicon glyphicon-th-list"></i>List Of Treatments</a></li>	
              </ul>
            </li>
             <li class="treeview">
              <a href="prenatal.php">
                <i class="glyphicon glyphicon-heart"></i>
                <span>Prenatal Record</span>
               
              </a>
              
            </li>
             <li class="treeview">
              <a href="vaccination.php">
                <i class="glyphicon glyphicon-pushpin"></i>
                <span>Vaccination/Immunization</span>
              </a>
            </li>
            <li class="treeview">
              <a href="">
                <i class="glyphicon glyphicon-wrench"></i>
                <span>Maintenance</span>
                <i class="glyphicon glyphicon-menu-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
		    <li><a href="bracket.php"><i class="glyphicon glyphicon-print"></i>Age Bracket</a></li>	
		    <li><a href="diagnosis.php"><i class="glyphicon glyphicon-print"></i>Diagnosis</a></li>
		    <li><a href="vacs.php"><i class="glyphicon glyphicon-print"></i>Vaccination/Immunization</a></li>	
			
              </ul>
            </li>
            <li class="treeview">
              <a href="">
                <i class="glyphicon glyphicon-signal"></i>
                <span>Report</span>
                <i class="glyphicon glyphicon-menu-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
			<li><a href="health_cases.php"><i class="glyphicon glyphicon-print"></i>Health Cases</a></li>
			<li><a href="prenatal_report.php"><i class="glyphicon glyphicon-print"></i>Prenatal</a></li>
			<li><a href="vaccine_report.php"><i class="glyphicon glyphicon-print"></i>Vaccination/Immunization</a></li>
			<li><a href="health_cases1.php"><i class="glyphicon glyphicon-print"></i>Case Report per Age Bracket</a></li>	
              </ul>
            </li>
	   
             
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
