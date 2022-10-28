<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_USER_ID'];
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
                                                        <h5 class="m-b-10">All Feedbacks</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa-chevron-left"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-times close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                     <div class="card-block table-border-style">
                                						<div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Name</th>
                                                                        <th>Contact</th>
                                                                        <th>Subject</th>
                                                                        <th>Date</th>
                                                                        <th>Reply</th>
                                                                        <th>Date</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                	<?php
																	$result = $db->prepare("select * from feedback where Log_Id='$Log_Id'");
																			$result->execute();
																			for($i=1; $row = $result->fetch(); $i++)
																			{
																				echo"<tr>";
																					echo"<td>".$i."</td>";
																					echo"<td>".$row["name"]."</td>";
																					echo"<td>".$row["cntno"]."</td>";
																					echo"<td>".$row["subj"]."</td>";
																					echo"<td>".$row["sdate"]."</td>";
																					echo"<td>".$row["reply"]."</td>";
																					echo"<td>".$row["rdate"]."</td>";
																				echo"</tr>";
																			}
																		?>
																		</tr>              																			
                                                                </tbody>
                                                            </table>
                                                       </div>
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
