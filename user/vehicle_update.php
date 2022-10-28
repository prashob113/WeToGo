<?php
	include("auth.php");
	include('../connect/db.php');
	$vehi_id=$_GET['vehi_id'];
	$result = $db->prepare("SELECT * FROM vehicle where vehi_id='$vehi_id'");
	$result->execute();
	$row_count =  $result->rowcount();
	for($i=0; $rows = $result->fetch(); $i++)
	{
		$Log_Id=$rows["Log_Id"];
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
                                                        <form method="post" enctype="multipart/form-data" action="action/vehicle_update.php" autocomplete="off">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Aadhar No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" value="<?php echo $aadharno;?>" name="aadharno" readonly>                              
                                                                     <input type="hidden" value="<?php echo $vehi_id;?>" name="vehi_id">                                                                   
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
                                                                    <select name="vtype" class="form-control form-control-primary">
                                                                        <option><?php echo $vtype;?></option>
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
                                                                    <input type="text" class="form-control form-control-primary" name="vcolor" value="<?php echo $vcolor;?>">
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Engine No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" name="vengno" value="<?php echo $vengno;?>">
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Buy Date</label>
                                                                <div class="col-sm-10">
                                                                    <input type="date" class="form-control form-control-primary" name="vbdate" value="<?php echo $vbdate;?>">
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Test Date</label>
                                                                <div class="col-sm-10">
                                                                    <input type="date" class="form-control form-control-primary" name="vtdate" value="<?php echo $vtdate;?>">
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Amount</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-primary" name="amt" value="<?php echo $amt;?>">
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Photo</label>
                                                                <div class="col-sm-10">
                                                                    <input type="file" class="form-control form-control-primary" name="photo">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Description</label>
                                                                <div class="col-sm-10">
                                                                   <textarea name="vdescrpt" rows="5" cols="5" class="form-control form-control-primary" required><?php echo $vdescrpt;?></textarea>
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
