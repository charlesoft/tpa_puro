<?php 
include("include/header.php");
?>
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Home <small>Statistics Overview</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Need improvement on backhand!</strong>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26W  10L</div>
                                        <div>Matches</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">345455</div>
                                        <div>Points won</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">256443</div>
                                        <div>Points lost</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Last Matches</h3>
                            </div>
                            <div class="panel-body">
                                <div id="container" style="width:100%; height:400px;"></div> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Games Won/Lost</h3>
                            </div>
                            <div class="panel-body">
                                <div id="games" style="width:100%; height:400px;"></div> 
                            </div>
                        </div>
                    </div>        
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Sets Won/Lost</h3>
                            </div>
                            <div class="panel-body">
                                <div id="sets" style="width:100%; height:400px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-calendar"></i> Last Matches </h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Opponent</th>
                                                <th>Surface</th>
                                                <th>Result</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="success">
                                                <td>05/02/2014</td>
                                                <td>Roger Federer</td>
                                                <td>Clay</td>
                                                <td>7/6 &nbsp; 6/0</td>
                                                <td><a href="">View Details</a></td>
                                            </tr>
                                                                                       
                                            <tr class="danger">
                                                <td>05/02/2014</td>
                                                <td>Roger Federer</td>
                                                <td>Clay</td>
                                                <td>7/6 &nbsp; 6/0</td>
                                                <td><a href="">View Details</a></td>
                                            </tr>                                            
                                            <tr>
                                                <td>05/02/2014</td>
                                                <td>Roger Federer</td>
                                                <td>Clay</td>
                                                <td>7/6 &nbsp; 6/0</td>
                                                <td><a href="">View Details</a></td>
                                            </tr>                                            
                                            <tr>
                                                <td>05/02/2014</td>
                                                <td>Roger Federer</td>
                                                <td>Clay</td>
                                                <td>7/6 &nbsp; 6/0</td>
                                                <td><a href="">View Details</a></td>
                                            </tr>                                            
                                            <tr>
                                                <td>05/02/2014</td>
                                                <td>Roger Federer</td>
                                                <td>Clay</td>
                                                <td>7/6 &nbsp; 6/0</td>
                                                <td><a href="">View Details</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        
        
        
        
<!-- FOOTER -->
    </div>
    <!-- /#wrapper -->  
    
    <script>    
    $(function () { 
    $('#container').highcharts({
            chart: {
                type: 'line'
            },
            title: {
                text: 'Matches Points Stats'
            },
            yAxis: {
                title: {
                    text: '%'
                }
            },
            xAxis: {
            },
            series: [{
                name: 'Points Won',
                data: [50, 30, 29, 65, 34, 85, 35, 85, 50, 30, 29, 65, 34, 85, 35, 85],
                color: '#083'
            }, {
                name: 'Points Lost',
                data: [39, 49, 20, 74, 48, 29, 58, 87, 39, 49, 20, 74, 48, 29, 58, 87],
                color: '#C20' 
            }]
        });
    });
    $(function () { 
    $('#games').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Games Stats'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
            },
            series: [{
                type: 'pie',
                    name: 'Games',
                        data: [
                            {
                                name: 'Games won',  
                                y: 73.0,
                                sliced: true,
                                selected: true,
                                color: '#083'
                            },
                            {
                                name: 'Games lost',  
                                y: 27.0,
                                sliced: true,
                                selected: true,
                                color: '#C20'
                            }                           
                        ]
            }]
    });
    });
	
	$(function () { 
    $('#sets').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Games Stats'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
            },
            series: [{
                type: 'pie',
                    name: 'Sets',
                        data: [
                            {
                                name: 'Sets won',  
                                y: 73.0,
                                sliced: true,
                                selected: true,
                                color: '#083'
                            },
                            {
                                name: 'Sets lost',  
                                y: 27.0,
                                sliced: true,
                                selected: true,
                                color: '#C20'
                            }                           
                        ]
            }]
    });
    });
    
    </script>
<?php 
include("include/footer.php");
?>
