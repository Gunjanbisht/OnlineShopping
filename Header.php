<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>OnlineShopping Sit</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/nav.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <!-- BEGIN: load jquery -->
  <script src="../js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/jquery-ui/jquery.ui.core.min.js"></script>
<!--    <script src="../js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="../js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="../js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="../js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>-->
    <!-- END: load jquery -->
    <!-- BEGIN: load jqplot -->
    <!--<link rel="stylesheet" type="text/css" href="css/jquery.jqplot.min.css" />
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="js/jqPlot/excanvas.min.js"></script><![endif]-->
<!--    <script language="javascript" type="text/javascript" src="../js/jqPlot/jquery.jqplot.min.js"></script>
    <script language="javascript" type="text/javascript" src="../js/jqPlot/plugins/jqplot.barRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="../js/jqPlot/plugins/jqplot.pieRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="../js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="../js/jqPlot/plugins/jqplot.highlighter.min.js"></script>
    <script language="javascript" type="text/javascript" src="../js/jqPlot/plugins/jqplot.pointLabels.min.js"></script>-->
    <script type="text/javascript" src="../js/Electronic.js"></script>
    <!-- END: load jqplot -->
    <!--<script src="../js/setup.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            setupDashboardChart('chart1');
            setupLeftMenu();
			setSidebarHeight();


        });
    </script>-->
</head>
  <div class="container_12">
     <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft">
                    <img src="../img/logo.png" alt="Logo" /></div>
                      <div class="floatright">
                        <div class="floatleft">
                          <img src="../img/img-profile.jpg" alt="Profile Pic" /></div>
                             <div class="floatleft marginleft10">
                                <ul class="inline-ul floatleft">
                            <li>Hello Admin</li>
                            <li><a href="Registration.php">SingUp</a></li>
                            <li><a href="LogIn.php">LogIn</a></li>
                            <li><a href="Registration.php">Customer LogIn</a></li>
                        </ul>
                        <br/>
                        <span class="small grey">Last Login: 3 hours ago</span>
                        <a href='CategorySelect.php' style="visibility:hidden" id="check">super admin</a>
                </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
      <div class="clear">
       </div>
        <div class="grid_12">
           <ul class="nav main"> 
<!--               <li class="ic-dashboard">
           </li>-->
<?php include 'Db.php';?>
<?php
$result = "SELECT * FROM Category";
$data = mysqli_query($Con,$result);
$num = mysqli_num_rows($data);
 mysqli_close($Con);
?>
            <?php
                for($i=1;$i<=$num;$i++){
                $rows = mysqli_fetch_array($data);
                ?>
                 <li class="ic-typography">
                 <a href="javascript:" id="demo<?php echo $rows['CategoryId'];?>" onmouseover="AjaxFunction(<?php echo $rows['CategoryId'];?>);"><?php echo $rows['CategoryName'];?></a>
               <?php
                }
                ?>
               </li>
               <li class="ic-typography"><a href='AddToCard.php' style="margin-left:600px;">Add to card</a></li>
               <li class="ic-typography"><a href='WishList.php'> Wish List </a></li>
           </ul>               
 </div>
      
<!--                <li class="ic-dashboard"><a href="dashboard.html"><span>Dashboard</span></a> </li>
                <li class="ic-form-style"><a href="javascript:"><span>Controls</span></a>
                    <ul> 
                        <li><a href="form-controls.html">Forms</a> </li>
                        <li><a href="buttons.html">Buttons</a> </li>
                        <li><a href="form-controls.html">Full Page Example</a> </li>
                        <li><a href="table.html">Page with Sidebar Example</a> </li>
                    </ul>
                </li>
                <li class="ic-typography"><a href="typography.html"><span>Typography</span></a></li>
				<li class="ic-charts"><a href="charts.html"><span>Charts & Graphs</span></a></li>
                <li class="ic-grid-tables"><a href="table.html"><span>Data Table</span></a></li>
                <li class="ic-gallery dd"><a href="javascript:"><span>Image Galleries</span></a>
               		 <ul>
                        <li><a href="image-gallery.html">Pretty Photo</a> </li>
                        <li><a href="gallery-with-filter.html">Gallery with Filter</a> </li>
                    </ul>
                </li>
                <li class="ic-notifications"><a href="notifications.html"><span>Notifications</span></a></li>

            </ul>-->
        