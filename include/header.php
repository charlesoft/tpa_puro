<?php 
    include("include/conexao.php");
    include('include/session.php');

    $user_loged = $_SESSION['user'];
    $query = mysql_query("SELECT * FROM users WHERE (player_email = '$user_loged')"); 
    $consulta = mysql_fetch_array($query);
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tennis Performance Analyzer</title>   
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Highcharts -->    
    <script src="js/highcharts.js"></script>
    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" style="min-height: 80px;" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">               
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.html"><img src="img/logo.png" style="width: 110px; margin-top: -12px; margin-left: 18px;"></a>                
            </div>
            <!-- Top Menu Items -->
            <a href="newmatch.php"><input type="button" value="New Match" class="btn btn-success" style=" margin-left: 36%; margin-top: 10px; padding: 18px; width: 200px;"></a>
            <ul class="nav navbar-right top-nav">            
                <li class="dropdown" style="margin-top: 14px;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo "Welcome " . $_SESSION['name']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">                        
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="top:80px;">
                    <li class="active">
                        <a href="home.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="service_stats.php"><i class="fa fa-fw fa-bar-chart-o"></i> Service Stats</a>
                    </li>
                    <li>
                        <a href="winner_stats.php"><i class="fa fa-fw fa-table"></i> Winner Stats</a>
                    </li>
                    <li>
                        <a href="unforced_errors_stats.php"><i class="fa fa-fw fa-edit"></i> Unforced errors stats</a>
                    </li>
                    <li>
                        <a href="tips.php"><i class="fa fa-fw fa-desktop"></i> Tips</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    <!-- END HEADER -->