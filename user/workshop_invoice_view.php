<?php
	include("auth.php");
	include('../connect/db.php');
	$vno=$_POST['vno'];
	$result = $db->prepare("SELECT * FROM vehicle where vno='$vno'");
	$result->execute();
	$row_count =  $result->rowcount();
	for($i=0; $rows = $result->fetch(); $i++)
	{
		$Log_Id=$rows["Log_Id"];
		$aadharno=$rows["aadharno"];
		$vname=$rows["vname"];
		$vno=$rows["vno"];
		$vtype=$rows["vtype"];
		$vbdate=$rows["vbdate"];
		$vmodel=$rows["vmodel"];
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
                                           <div class="col-sm-12">
                                            <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="m-b-10">Fuel Invoice</h5>
                                                     </div>
                                                     <div class="card-block">
                                                        <form method="post" action="action/wrkshp_save.php" autocomplete="off">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Vehicle No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="vno" value="<?php echo $vno;?>" class="form-control form-control-primary" readonly>
                                                                     <input type="hidden" name="Log_Id" value="<?php echo $Log_Id;?>">
                                                                     <input type="hidden" name="aadharno" value="<?php echo $aadharno;?>">
                                                                     <input type="hidden" name="vbdate" value="<?php echo $vbdate;?>">
                                                                     <input type="hidden" name="vmodel" value="<?php echo $vmodel;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="vname" value="<?php echo $vname;?>" class="form-control form-control-primary" readonly>
                                                                </div>
                                                            </div>                                                           
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Vehicle Type</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="vtype" value="<?php echo $vtype;?>" class="form-control form-control-primary" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Kilo Meter</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="kmeter" required class="form-control form-control-primary">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Workshop</label>
                                                                <div class="col-sm-10">
                                                    <input list="fname" required class="form-control form-control-primary" name="fname" placeholder="Search Fuel Station">
                                                                    <datalist id="fname">
                                                                        <option value="">Select</option> 
                                                                         <?php
                                                                           $result = $db->prepare("select distinct(name) from workshop");
                                                                            $result->execute();
                                                                            $row_count =  $result->rowcount();
                                                                            for($i=0; $rows = $result->fetch(); $i++)
                                                                            {
                                                                            echo '<option>'.$rows['name'].'</option>';
                                                                            }
																			
                                                                        ?>	                                         					
                                                                    </datalist>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Amount</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" name="amt" required min="0" step="0.01" class="form-control form-control-primary">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Description</label>
                                                                <div class="col-sm-10">
                                                      <textarea name="desp" rows="5" cols="5" class="form-control form-control-primary" required></textarea>
                                                                </div>
                                                            </div>                                                           
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Date</label>
                                                                <div class="col-sm-10">
                                                                    <input type="date" class="form-control form-control-primary" max="<?php echo date("Y-m-d");?>" required>
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
