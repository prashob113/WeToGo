<?php
	$Log_Id=$_SESSION['SESS_USER_ID'];
	$result = $db->prepare("select * from user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$uname=$row["name"];		
	}
?>
<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" style="text-transform:capitalize;">
            Welcome <?php echo $uname;?>
        </div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="index.php">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Profile</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="profile.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Profile</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                        
                </ul>
            </li>                                                                
            
            
             <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Vehcile</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="vehicle_register.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Register</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>   
                    <li class=" ">
                        <a href="vehicle_search.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Search</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                                        
                </ul>
            </li>  
            
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Travel</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="travel_search.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Search</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>   
                    <li class=" ">
                        <a href="travel_request.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Request</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>   
                    <li class=" ">
                        <a href="travel_request_pr.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Process</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>  
                    <li class=" ">
                        <a href="travel_request_cm.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Complete</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                                        
                </ul>
            </li>  
            
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Fuel</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">                   
                     <li class=" ">
                        <a href="fuel_search.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Search</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="fuel_request_ac.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Request</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li> 
                    <li class=" ">
                        <a href="workshop_request_ac.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Status</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li> 
                     <li class=" ">
                        <a href="fuel_invoice.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Invoice</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>     
                    <li class=" ">
                        <a href="fuel_report.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Report</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                      
                </ul>
            </li> 
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Workshop</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="workshop_search.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Search</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>   
                    <li class=" ">
                        <a href="workshop_request.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Request</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li> 
                    <li class=" ">
                        <a href="workshop_request_ac.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Status</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li> 
                    <li class=" ">
                        <a href="workshop_invoice.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Invoice</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>  
                    <li class=" ">
                        <a href="workshop_report.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Report</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                     
                </ul>
            </li> 
            
            
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Food</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">                                      
                    <li class=" ">
                        <a href="product_search.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Search</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="product_request.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Order</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>  
                     <li class=" ">
                        <a href="product_report.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Report</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                    
                </ul>
            </li> 
             
            
            
            
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Report</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">                                      
                    <li class=" ">
                        <a href="report_vehicle.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Travel</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                                    
                </ul>
            </li> 
            
            
           
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Feedback</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="feedback_send.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Send</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>   
                     <li class=" ">
                        <a href="feedback_view.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">View</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                                         
                </ul>
            </li> 
             <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Logout</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">                  
                     <li class=" ">
                        <a href="../index.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Logout</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>                                                  
                </ul>
            </li> 
            
        </ul>
    </div>
</nav>