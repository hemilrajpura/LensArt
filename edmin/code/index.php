
<?php
session_start();
ob_start();
				
?>
				<?php

$c=mysqli_connect("localhost","root","");
if($c)
{
		$cnt=0;
		$cntreq=0;
mysqli_select_db($c,"Lensart");
$qry="select * from user";
$log1=mysqli_query($c,$qry);


		while($row = mysqli_fetch_array($log1))
        {
			$cnt=$cnt+1;
		}
		$qry="select * from bookevent";
	
		$log=mysqli_query($c,$qry);
		while($row = mysqli_fetch_array($log))
        {
			$cntreq=$cntreq+1;
		}
		
}
			
			
			?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
       <div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Admin
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav nav-icons">
						<li style="margin-left:900px"><a href="http://localhost/lensart_login/adminlogin.php" >Logout</a></li>
					</ul>

					
					<ul class="nav pull-right">
						<li class="dropdown">
							
							
						</li>
						
						
						<li class="nav-user dropdown">
							
							
								
								
							
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <!-- <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                </li>
                                <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                    11</b> </a></li>
                                <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Shoot Reaquest<b class="label orange pull-right">
									 </b> </a></li>	
                            </ul>
                            <!--/.widget-nav 
                            <ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul>
                            /.widget-nav 
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div> -->
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
	
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="task.php" class="btn-box big span4"><i class=" icon-random"></i><b><?php echo $cntreq; ?></b>
                                        <p class="text-muted">
                                            Shoot Requests</p>
                                    </a><a href="users.php" class="btn-box big span4"><i class="icon-user"></i><b><?php echo $cnt; ?></b>
                                        <p class="text-muted">
                                            Users</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="admin-wedding.php" class="btn-box small span4"><i class=""></i><b>Wedding Shoot</b>
                                                </a>
                                                 <a href="admin-bday.php" class="btn-box small span4"><i class=""></i><b>Birthday Shoot</b>
                                                </a>
												<a href="https://dashboard.tawk.to/#/dashboard" class="btn-box small span4"><i class=""></i><b>chat with client</b></a>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                              <a href="admin-eng.php" class="btn-box small span4"><i class=""></i><b>Engagement Shoot</b>
                                                </a><a href="admin-maternity.php" class="btn-box small span4"><i class=""></i><b>Maternity Shoot</b> </a>
												
                                            </div>
											
										
                                        </div>
										
										
                                    </div>
                                    
                                </div>
                            </div>
                            <!--/#btn-controls-->
                            
                            <!--/.module-->
                           
                           
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; Admin </b>
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
</html>
 <?php echo $_SESSION['cntreq']; ?> 