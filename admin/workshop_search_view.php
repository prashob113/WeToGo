<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_ADMIN_ID'];
	$location=$_POST['location'];
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
                                       <?php
											$result = $db->prepare("SELECT * FROM workshop where  location like'%".$location."%'");
											$result->execute();
											$row_count =  $result->rowcount();
											for($i=0; $rows = $result->fetch(); $i++)
											{
												$wrk_id=$rows["wrk_id"];
										  ?>  
                                            <!-- users visite and profile start -->
                                            <div class="col-md-4">
                                                <div class="card user-card">
                                                    <div class="card-header">
                                                        <h5>Workshops</h5>
                                                    </div>
                                                    <div class="card-block">
                                                       <img src="../v_photo/<?php echo $rows['photo'];?>" alt="img" class="img-fluid" width="100%">
                                                    <h6 class="f-w-600 m-t-25 m-b-10"><?php echo $rows['name'];?></h6>
                                                    <p class="text-muted">Active | <?php echo $rows['cntno'];?> |<?php echo $rows['wtype'];?></p>
                                                    <hr>
                                                    <p class="text-muted">Service <br> <?php echo $rows['srvce'];?></p>
                                                         <a href="workshop_search.php" class="btn btn-info btn-out-dashed btn-block">Back</a>
                                                         <hr/>                                                       
                                                    </div>                                                                                                   
                                                </div>
                                            </div>
                                             <?php
													}
													?>  
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
