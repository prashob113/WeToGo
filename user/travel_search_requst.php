<?php
	include("auth.php");
	include('../connect/db.php');
	$vehi_id=$_GET['vehi_id'];
	$result = $db->prepare("SELECT * FROM vehicle where vehi_id='$vehi_id'");
	$result->execute();
	$row_count =  $result->rowcount();
	for($i=0; $rows = $result->fetch(); $i++)
	{
		$VLog_Id=$rows["Log_Id"];
		$aadharno=$rows["aadharno"];
		$oname=$rows["oname"];
		$ocnto=$rows["ocnto"];
		$vname=$rows["vname"];
		$vno=$rows["vno"];
		$brnd=$rows["brnd"];
		$vmodel=$rows["vmodel"];
		$vtype=$rows["vtype"];
		$vcolor=$rows["vcolor"];
		$vengno=$rows["vengno"];
		$vbdate=$rows["vbdate"];
		$vtdate=$rows["vtdate"];
		$amt=$rows["amt"];
		$vdescrpt=$rows["vdescrpt"];
	}
	$ULog_Id=$_SESSION['SESS_USER_ID'];
	$result = $db->prepare("select * from user where Log_Id='$ULog_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row["name"];
		$contact_no=$row["contact_no"];
		$location=$row["location"];
		$adharno=$row["adharno"];
		$photo=$row["photo"];
			
	}
?>	
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
                                                        <h5 class="m-b-10">Travel Request</h5>
                                                        
                                                     </div>
                                                     <div class="card-block">
                                                        <form method="post" enctype="multipart/form-data" action="action/trvl_request.php" autocomplete="off">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Aadhar No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" value="<?php echo $aadharno;?>" name="aadharno" readonly>                              
                                                                     <input type="hidden" value="<?php echo $VLog_Id;?>" name="VLog_Id">  
                                                                     <input type="hidden" value="<?php echo $ULog_Id;?>" name="ULog_Id">   
                                                                     <input type="hidden" value="<?php echo $photo;?>" name="photo">   
                                                                     <input type="hidden" value="<?php echo $oname;?>" name="oname">   
                                                                     <input type="hidden" value="<?php echo $ocnto;?>" name="ocnto">   
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" name="vname" value="<?php echo $vname;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Vehicle No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" name="vno" value="<?php echo $vno;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Brand</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" name="brnd" value="<?php echo $brnd;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Model</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" name="vmodel" value="<?php echo $vmodel;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Vehicle Type</label>
                                                                <div class="col-sm-10">
                                                                <input type="text" class="form-control form-control-primary" name="vtype" value="<?php echo $vtype;?>">                                                                 
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Customer</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" name="cname" value="<?php echo $name;?>">
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Contact</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" name="contact_no" value="<?php echo $contact_no;?>">
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Traveller</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control form-control-primary" name="tno">
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Date</label>
                                                                <div class="col-sm-10">
                                                                    <input type="date" class="form-control form-control-primary" name="tdate">
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Amount</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" name="amt" value="<?php echo $amt;?>">
                                                                </div>
                                                            </div>                                                           
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Description</label>
                                                                <div class="col-sm-10">
                                                                   <textarea name="vdescrpt" rows="5" cols="5" class="form-control form-control-primary" required></textarea>
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
