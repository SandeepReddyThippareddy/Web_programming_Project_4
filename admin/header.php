<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>  
  <div class="header" style="background-color: white;color:black;">

                <div class="header-left">
                    <a href="dashboard.php" class="logo">
						<img src="assets/img/restatelg.png" alt="Logo">
					</a>
					<a href="dashboard.php" class="logo logo-small">
						<img src="assets/img/restatelg.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				
				<a href="javascript:void(0);" id="toggle_btn">
					<b style="background-color: white;color:black;"><<</b>
				</a>
			
				<ul class="nav user-menu" >
					  <h4 style="color:white;margin-top:13px;text-transform:capitalize;"><?php echo $_SESSION['auser'];?></h4> 
					<li class="nav-item dropdown app-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.png" width="31" alt="Ryan Taylor"></span>
						</a>
						
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets/img/profiles/avatar-01.png" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6><?php echo $_SESSION['auser'];?></h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.php">Profile</a>
							<a class="dropdown-item" href="logout.php">Logout <?php echo $_SESSION['auser'];?></a>
						</div>
					</li>

					
				</ul>
				
            </div>

            <div class="sidebar" id="sidebar" style="background-color: black;">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li> 
								<a href="dashboard.php"><span>Dashboard</span></a>
							</li>
							
							  <li class="menu-title"> 
								<span>Authentication</span>
							</li>
						
							<li class="submenu">
								<a href="#"> <span> Authentication </span> <span class="menu-arrow">∟</span></a>
								<ul style="display: none;">
									<li><a href="index.php"> Login </a></li>
									<li><a href="register.php"> Register </a></li>
									
								</ul>
							</li> 
							<li class="menu-title"> 
								<span>All Users</span>
							</li>
						
							<li class="submenu">
								<a href="#"> <span> All Users </span> <span class="menu-arrow">∟</span></a>
								<ul style="display: none;">
									<li><a href="adminlist.php"> Admin </a></li>
									<li><a href="userlist.php"> Users </a></li>
									<li><a href="useragent.php"> Agent </a></li>
									<li><a href="userbuilder.php"> Builder </a></li>
								</ul>
							</li>

							<li class="menu-title"> 
								<span>State & City</span>
							</li>
						
							<li class="submenu">
								<a href="#"> <span>State & City</span> <span class="menu-arrow">∟</span></a>
								<ul style="display: none;">
									<li><a href="stateadd.php"> State </a></li>
									<li><a href="cityadd.php"> City </a></li>
								</ul>
							</li>
						
							<li class="menu-title"> 
								<span>Property Management</span>
							</li>
							<li class="submenu">
								<a href="#"> <span> Property</span> <span class="menu-arrow">∟</span></a>
								<ul style="display: none;">
									<li><a href="propertyadd.php"> Add Property</a></li>
									<li><a href="propertyview.php"> View Property </a></li>
									
								</ul>
							</li>
							
							
							
							<li class="menu-title"> 
								<span>Query</span>
							</li>
							<li class="submenu">
								<a href="#"> <span> Contact,Feedback </span> <span class="menu-arrow">∟</span></a>
								<ul style="display: none;">
									<li><a href="contactview.php"> Contact </a></li>
									<li><a href="feedbackview.php"> Feedback </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>About</span>
							</li>
							<li class="submenu">
								<a href="#"> <span> About Page </span> <span class="menu-arrow">∟</span></a>
								<ul style="display: none;">
									<li><a href="aboutadd.php"> Add About Content </a></li>
									<li><a href="aboutview.php"> View About </a></li>
								</ul>
							</li>
							
						</ul>
					</div>
                </div>
            </div>
			  
