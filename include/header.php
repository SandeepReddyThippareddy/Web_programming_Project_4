<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
            <div class="main-nav secondary-nav hover-success-nav py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="images/logo/restatelg.png" alt="" height="60px"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>
										
										<li class="nav-item"> <a class="nav-link" href="about.php">About</a> </li>
										
                                        <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>										
										
                                        <li class="nav-item"> <a class="nav-link" href="property.php">Properties</a> </li>
                                        
                                        <li class="nav-item"> <a class="nav-link" href="agent.php">Agent</a> </li>
                                    </ul>

                                    <ul class="navbar-nav mr-auto">
                                        <?php  if(isset($_SESSION['uemail']))
                                            { ?>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"> <a class="nav-link" href="profile.php">Profile</a> </li>
                                                    <li class="nav-item"> <a class="nav-link" href="feature.php">Your Property</a> </li>
                                                    <li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>	
                                                </ul>
                                            </li>
                                            <?php } else { ?>
                                            <li> <a class="nav-item btn btn-warning d-none d-xl-block" style="margin: 0px 20px;cursor:pointer;" href="login.php">Login</a> </li>
                                            <li> <a class="nav-item btn btn-warning d-none d-xl-block" style="margin: 0px 20px;cursor:pointer;" href="register.php">Register</a> </li>
                                            <?php } ?>

                                        <a class="btn btn-warning d-none d-xl-block" style="margin: 0px 20px;cursor:pointer;" href="submitproperty.php">Submit Property</a> 
                                        <a class="btn btn-warning d-none d-xl-block" style="margin: 0px 20px;cursor:pointer;" href="admin/index.php">Admin</a> 

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>