<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>primary level tables</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/pe-icons.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.js"></script>
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57x57.png">
<style>
    table,td{
        border:1px solid #676767;
    }
    table{
        width: 750px;
        margin-top: 10px;
        margin-bottom: 20px;
    }
    thead td{
        font-weight:bold;
        text-align:center;
        color: #fff;
        background: #333;
        padding: 5px;
        
    }
    tbody td{
        padding: 5px;
        background: #EFEFEF;
    }
    tfoot td{
        text-align: center;
        font-weight: bold;
        background: #DDD;
        padding: 5px;
    }
</style>
    <script type="text/javascript">
    jQuery(document).ready(function($){
    'use strict';
        jQuery('body').backstretch([
            "images/level/16.jpg",
            "images/level/16.jpg",
            "images/level/16.jpg"
        ], {duration: 5000, fade: 500});

       
    });
    </script>
 <script type="text/javascript">
	function myclick() {
	    var id=prompt("Enter Your ID:");
	    if ( id==true ) {
		location.href='studentdgreekg.html';
	    }
	   
	}
    function myclickp() {
	    var id=prompt("Enter Your ID:");
	    if ( id==true ) {
		location.href='studentdegrees.html';
	    }
	   
	}
    
    </script>
    
</head><!--/head-->
<body>
<div id="preloader"></div>
    <header class="navbar navbar-inverse navbar-fixed-top " role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html"><h1><i class="fa fa-graduation-cap" aria-hidden="true"></i>FUTURE</h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">About Us</a></li>
		      <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Primary Level <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="activities.html">Activities</a></li>
                            <li><a onclick="myclickp()">Student Degrees</a></li>
			   <li ><a href="tables.php">Tables</a></li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kg Level <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="activities.html">Activities</a></li>
                            <li><a onclick="myclick()">Student Degrees</a></li>
			     <li ><a href="tableskg.php">Tables</a></li>
                        </ul>
                    </li>
                  
                    <li><a href="contact-us.html">Contact</a></li>
                    
                    <li><span class="search-trigger"><i class="fa fa-search"></i></span></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="single-page-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <h2 class="main-title">Student Tables</h2>
                                    <hr>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <div id="content-wrapper">
        
        <section id="contact" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    
                    <div class="col-md-8 fade-up">
                        
                        <div id="message"></div>
                        <form method="post" action="sendemail.php" id="contactform">
                             
                            <table >
                                <thead>
                                <tr>
                                    <td>Stage</td>
                                    <td colspan="8">1/1</td>
                                    
                                        
                                </tr>
                            </thead>
                                <tbody>
                                <tr>
                                    <td>Classes</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                </tr>
                                <tr>
								<?php
										//Create Connection
										$conn = mysqli_Connect("localhost", "root", "", "studentsystem");

										//Check Connection
										if($conn-> connect_error){
											die("Connection Failed: ".$conn->connect_error);
										}

										//Select Statement
										$sql = "SELECT `Classes`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8` FROM `schedule1_2`";
										$result = $conn->query($sql);

										if($result->num_rows > 0){
											while($row = $result-> fetch_assoc()){
												echo "<tr><td>".$row["Classes"]."</td><td>". $row["1"]."</td><td>".$row["2"]."</td><td>".$row["3"]."</td><td>".$row["4"]."</td><td>".$row["5"]."</td><td>".$row["6"]."</td><td>".$row["7"]."</td><td>".$row["8"]
												."</td></tr>";
											}
											echo "</table>";
										}else{
											echo "0 Result";
										}
										$conn->close();
										?>
                                </tr>
                                
                                
                                </tbody>
                                </table>
                            
                            
                        </form>
                    </div><!-- col -->
                </div><!-- row -->
                <div class="gap"></div>
            </div>
        </section>
    </div>

   <div id="footer-wrapper">
        <section id="bottom" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 about-us-widget">
                        <h4>Our vision</h4>
                        <p>Graduates with an efficient
			armed with scientific creativity and ideals capable of keeping up with
			the changes of the age.</p>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>School</h4>
                        <div>
                            <ul class="arrow">
                                <li><a href="#">School Overview</a></li>
                                <li><a href="#">Our Message</a></li>
                                <li><a href="#">Examples Of ?Activites</a></li>
                                
                            </ul>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Latest Activites</h4>
                        <div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="images/portfolio/folio01.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Basketball</a></span>
                                    <small class="muted">Arose 14 April 2014</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="images/portfolio/folio02.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Football</a></span>
                                    <small class="muted">Arose 14 April 2014</small>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Come See Us</h4>
                        <address>
                            <strong>AL_TAHRIR</strong><br>
                            CAIRO _ EGYPT,<br>
                            CAIRO, 0215648<br>
                            <abbr title="Phone"><i class="fa fa-phone"></i></abbr> 546 840654 05
                        </address>
                    </div> <!--/.col-md-3-->
                </div>
            </div>
        </section><!--/#bottom-->

        <footer id="footer" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        &copy; 2019 FUTURE. All Rights Reserved. 
                    </div>
                    <div class="col-sm-4">
                        <ul class="pull-right">
                            <li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li><!--#gototop-->
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!--/#footer-->
    </div>


    <script src="js/plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
    <script src="js/init.js"></script>
</body>
</html>