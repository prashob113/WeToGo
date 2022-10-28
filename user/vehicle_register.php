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
		$adharno=$row["adharno"];
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
                                                        <h5 class="m-b-10">Vehcile Register</h5>
                                                        
                                                     </div>
                                                     <div class="card-block">
                                                        <form method="post" enctype="multipart/form-data" action="action/vehicle_save.php" autocomplete="off">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Aadhar No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" value="<?php echo $adharno;?>" name="aadharno" readonly>
                                                                    <input type="hidden" name="Log_Id"  value="<?php echo $Log_Id;?>">
                                                                    <input type="hidden" name="oname"  value="<?php echo $name;?>">
                                                                    <input type="hidden" name="ocnto"  value="<?php echo $contact_no?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" name="vname" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Vehicle No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" name="vno" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Brand</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" name="brnd" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Model</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" name="vmodel" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Vehicle Type</label>
                                                                <div class="col-sm-10">
                                                                    <select name="vtype" class="form-control form-control-primary" required>
                                                                        <option value="">Select</option>
                                                                        <option>Two Wheeler</option>
                                                                        <option>Three Wheeler</option>
                                                                        <option>Four Wheeler</option>
                                                                        <option>Heavy</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Color</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" name="vcolor" required>
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Engine No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" name="vengno" required>
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Buy Date</label>
                                                                <div class="col-sm-10">
                                                                    <input type="date" class="form-control form-control-primary" name="vbdate" required>
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Test Date</label>
                                                                <div class="col-sm-10">
                                                                    <input type="date" class="form-control form-control-primary" name="vtdate" required>
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Amount</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control form-control-primary" name="amt" required min="0" step="0.01">
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Photo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="file" class="form-control form-control-primary" name="photo" required>
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
