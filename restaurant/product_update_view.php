<?php
	include("auth.php");
	include('../connect/db.php');
	$prd_id=$_GET["prd_id"];
	$result = $db->prepare("select * from product where prd_id='$prd_id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$prd_id = $row['prd_id'];
		$name = $row['name'];
		$price= $row['price'];
		$qty = $row['qty'];
		$tax = $row['tax'];
		$location = $row['location'];
		$desp = $row['desp'];
		$photo = $row['photo'];											
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
                                                        <h5 class="m-b-10">Product Update</h5>
                                                        
                                                     </div>
                                                     <div class="card-block">
                                                        <form method="post" action="action/product_update.php" enctype="multipart/form-data">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="name" class="form-control form-control-primary" value="<?php echo $name;?>">
                                                                    <input type="hidden" name="prd_id" value="<?php echo $prd_id;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Qty</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="qty" class="form-control form-control-primary" value="<?php echo $qty;?>">
                                                                </div>
                                                            </div>                                                  
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Price</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="price" class="form-control form-control-primary" value="<?php echo $price;?>">
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Tax</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="tax" class="form-control form-control-primary" value="<?php echo $tax;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Location</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="location" class="form-control form-control-primary" value="<?php echo $location;?>" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Description</label>
                                                                <div class="col-sm-10">
                                     <textarea name="desp" rows="5" cols="5" class="form-control form-control-primary"><?php echo $desp;?></textarea>
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
