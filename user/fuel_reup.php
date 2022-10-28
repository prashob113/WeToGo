<?php
	include("auth.php");
	include('../connect/db.php');
	
	$fuel_id=$_GET['fuel_id'];
	$result = $db->prepare("SELECT * FROM fuel where fuel_id='$fuel_id'");
	$result->execute();
	$row_count =  $result->rowcount();
	for($i=0; $rows = $result->fetch(); $i++)
	{
		$WLog_Id=$rows["Log_Id"];
		$wname=$rows["name"];
		$wcntno=$rows["cntno1"];
	}
	
	$CLog_Id=$_SESSION['SESS_USER_ID'];
	$result = $db->prepare("SELECT * FROM user where  Log_Id='$CLog_Id'");
	$result->execute();
	$row_count =  $result->rowcount();
	for($i=0; $rows = $result->fetch(); $i++)
	{
		$cname=$rows["name"];
		$ccntno=$rows["contact_no"];
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
                                                        <h5 class="m-b-10">Problem Register</h5>
                                                        
                                                     </div>
                                                     <div class="card-block">
                                                        <form method="post" enctype="multipart/form-data" action="action/fl_save.php">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Workshop</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="wname" class="form-control form-control-primary" value="<?php echo $wname;?>" readonly>
                                                                    <input type="hidden" name="WLog_Id" value="<?php echo $WLog_Id;?>">
                                                                    <input type="hidden" name="CLog_Id" value="<?php echo $CLog_Id;?>">
                                                                    <input type="hidden" name="cname" value="<?php echo $cname;?>">
                                                                    <input type="hidden" name="ccntno" value="<?php echo $ccntno;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Contact No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="wcntno" class="form-control form-control-primary" value="<?php echo $wcntno;?>" readonly>
                                                                </div>
                                                            </div>                                                           
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Time</label>
                                                                <div class="col-sm-10">
                                                                    <input type="time"  name="tme" required class="form-control form-control-primary" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Date</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text"  name="date"  class="form-control form-control-primary" value="<?php echo date("Y-m-d");?>" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Problem</label>
                                                                <div class="col-sm-10">
                                                                   <textarea name="prblm" rows="5" cols="5" class="form-control form-control-primary" required></textarea>
                                                                </div>
                                                            </div>                                                           
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Photo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="file"  name="photo" class="form-control form-control-primary" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row pull-right">
                                                               <div class="col-sm-10">
                                                                 <input type="submit" class="btn btn-danger btn-round btn-bg " value="Submit">
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
