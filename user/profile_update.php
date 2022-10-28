<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_USER_ID'];
	
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
                                            <div class="col-sm-8">
                                            <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="m-b-10">Profile Update</h5>
                                                        
                                                     </div>
                                                     <div class="card-block">
                                                        <form method="post" enctype="multipart/form-data" autocomplete="off" action="action/profile_update.php">
                                                           <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Name</label>
                                                                <div class="col-sm-10">
                                                                <input type="hidden" name="Log_Id"  value="<?php echo $Log_Id;?>">
                                                                    <input type="text" name="name" class="form-control form-control-primary" required value="<?php echo $name;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">License No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="liceno" class="form-control form-control-primary" required value="<?php echo $liceno;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Aadhar No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="adharno" class="form-control form-control-primary" required value="<?php echo $adharno;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Contact No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="contact_no" class="form-control form-control-primary" required value="<?php echo $contact_no;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Email</label>
                                                                <div class="col-sm-10">
                                                                    <input type="email" name="email" class="form-control form-control-primary" required value="<?php echo $email;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Location</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="location" class="form-control form-control-primary" required value="<?php echo $location;?>">
                                                                </div>
                                                            </div>                                                            
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Password</label>
                                                                <div class="col-sm-10">
                                                                    <input type="password" name="password" class="form-control form-control-primary"  value="<?php echo $password;?>">
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Photo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="file" name="photo" class="form-control form-control-primary" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row pull-right">
                                                               <div class="col-sm-10">
                                                                 <input type="submit" class="btn btn-danger btn-round btn-bg " value="Update">
                                                                </div>
                                                            </div>
                                                        </form>
                                                     </div>
                                                  </div>
                                                <!-- Basic Form Inputs carde end -->      
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
	</div>  
    <!-- Pre-loader end -->          
</body>
<?php include("include/js.php");?>

</html>
