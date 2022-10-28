<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_WORKSHOP_ID'];
	$result = $db->prepare("select * from user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row["name"];
		$contact_no=$row["contact_no"];
		$email=$row["email"];
		$location=$row["location"];
		$password=$row["password"];	
		$liceno=$row["liceno"];
		$adharno=$row["adharno"];
		$photo=$row["photo"];
			
	}
?>	
<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Vehicle Track</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />     
        <meta name="author" content="codedthemes">
        <?php include("include/css.php");?>     
	</head>
<body>	
    
    <!-- Pre-loader start -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
               <div class="navbar-wrapper">
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#!">
                           <i class="ti-menu"></i>
                       </a>                      
                       <a href="index.php">
                          Vehicle Track
                       </a>                      
                   </div>
               </div>
           </nav>
           
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include("include/leftmenu.php");?>
                    <div class="pcoded-content" id="home">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                      <div class="row">
                                            <!-- users visite and profile start -->
                                            <div class="col-md-4">
                                                <div class="card user-card">
                                                    <div class="card-header">
                                                        <h5>Profile</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <?php
																if($photo=="")
																{
															?>
                                                            <img src="../assest/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                                           <?php
																}
																else
																{
														   ?>
                                                           <img src="../photo/<?php echo $photo;?>" class="img-radius" width="100%" alt="User-Profile-Image">
                                                           <?php
																}
														   ?>
                                                         <h6 class="f-w-600 m-t-25 m-b-10"><?php echo $name;?></h6>
                                                        <p class="text-muted">Active | <?php echo $contact_no;?> | <?php echo $email;?></p>
                                                        <hr/>
                                                        <p class="text-muted m-t-15">Activity Level: 75%</p>
                                                        <hr/>
                                                         <a href="profile_update.php" class="btn btn-info btn-round btn-block">Update</a>
                                                         <hr/>
                                                        <div class="row justify-content-center user-social-link">
                                                          <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                                                          <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
                                                          <div class="col-auto"><a href="#!"><i class="fa fa-dribbble text-dribbble"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- users visite and profile end -->
                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>  
    <!-- Pre-loader end -->          
</body>
<?php include("include/js.php");?>

</html>
