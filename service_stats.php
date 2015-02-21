<?php 
include("include/header.php");
?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Service Stats <small>Statistics Overview</small>
                        </h1>
                    </div>
                </div>
  
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>Aces</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>Double Faults</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Aces</h3>
                            </div>
                            <div class="panel-body">
                                <div id="aces" style="width:100%; height:400px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Double Faults</h3>
                            </div>
                            <div class="panel-body">
                                <div id="double_faults" style="width:100%; height:400px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> First Serve In</h3>
                            </div>
                            <div class="panel-body">
                                <div id="first_serve" style="width:100%; height:400px;"></div>
                            </div>
                        </div>
                    </div>   
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Serving Points Won/Lost</h3>
                            </div>
                            <div class="panel-body">
                                <div id="serving_points" style="width:100%; height:400px;"></div>
                            </div>
                        </div>
                    </div>     
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Receiving Points Won/Lost</h3>
                            </div>
                            <div class="panel-body">
                                <div id="receiving_points" style="width:100%; height:400px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-calendar"></i> Number stats </h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Total serving points</th>
                                                <th>Won</th>
                                                <th>Lost</th>
                                                <th>Aces</th>
                                                <th>Double faults</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="success">
                                                <td>500</td>
                                                <td>305</td>
                                                <td>195</td>
                                                <td>28</td>
                                                <td>43</a></td>
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

    
    <script>    
    
    $(function () { 
    $('#aces').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Aces'
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
                    name: 'Percentage',
                        data: [
                            {
                                name: 'Aces',  
                                y: 73.0,
                                sliced: true,
                                selected: true,
                                color: '#083'
                            },
                            {
                                name: 'Other',  
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
    $('#double_faults').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Double Faults'
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
                    name: 'Percentage',
                        data: [
                            {
                                name: 'Double faults',  
                                y: 73.0,
                                sliced: true,
                                selected: true,
                                color: '#083'
                            },
                            {
                                name: 'Other',  
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
    $('#first_serve').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'First Serve'
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
                    name: 'Percentage',
                        data: [
                            {
                                name: 'In',  
                                y: 73.0,
                                sliced: true,
                                selected: true,
                                color: '#083'
                            },
                            {
                                name: 'Out',  
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
    $('#serving_points').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Serving Points'
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
                    name: 'Percentage',
                        data: [
                            {
                                name: 'Won',  
                                y: 73.0,
                                sliced: true,
                                selected: true,
                                color: '#083'
                            },
                            {
                                name: 'Lost',  
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
    $('#receiving_points').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Receiving Points'
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
                    name: 'Percentage',
                        data: [
                            {
                                name: 'Won',  
                                y: 73.0,
                                sliced: true,
                                selected: true,
                                color: '#083'
                            },
                            {
                                name: 'Lost',  
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