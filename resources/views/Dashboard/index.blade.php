@extends('Dashboard.layouts.app')
@section('title','Home')
@section('main')

    <div class="row">
        <div class="col-md-12 col-lg-6">

            <!-- Sales Chart -->
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">Revenue</h4>
                </div>
                <div class="card-body">
                    <div id="morrisArea"></div>
                </div>
            </div>
            <!-- /Sales Chart -->

        </div>
        <div class="col-md-12 col-lg-6">

            <!-- Invoice Chart -->
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">Status</h4>
                </div>
                <div class="card-body">
                    <div id="morrisLine"></div>
                </div>
            </div>
            <!-- /Invoice Chart -->

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <!-- Recent Orders -->
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
										<span class="dash-widget-icon text-primary border-primary">
											<i class="fe fe-users"></i>
										</span>
                                <div class="dash-count">
                                    <h3>220</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Voltage</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
										<span class="dash-widget-icon text-success">
											<i class="fe fe-credit-card"></i>
										</span>
                                <div class="dash-count">
                                    <h3>12</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Current</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
										<span class="dash-widget-icon text-danger border-danger">
											<i class="fe fe-money"></i>
										</span>
                                <div class="dash-count">
                                    <h3>2640</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Power</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
										<span class="dash-widget-icon text-warning border-warning">
											<i class="fe fe-folder"></i>
										</span>
                                <div class="dash-count">
                                    <h3>3000</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Power</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Recent Orders -->

        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">Live Data</h4>
                </div>
                <div class="card-body">
                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">



        </div>
    </div>

    <script>
        window.onload = function() {

            var dataPoints = [];

            var options = {
                theme: "light2",
                data: [{
                    type: "line",
                    dataPoints: dataPoints
                }]
            };
            $("#chartContainer").CanvasJSChart(options);
            updateData();

// Initial Values
            var xValue = 0;
            var yValue = 0;
            var newDataCount = 2;

            function addData(data) {
                if(newDataCount != 1) {
                    $.each(data, function(key, value) {
                        dataPoints.push({x: value[0], y: parseInt(value[1])});
                        xValue++;
                        yValue = parseInt(value[1]);
                    });
                } else {
                    //dataPoints.shift();
                    dataPoints.push({x: data[0][0], y: parseInt(data[0][1])});
                    xValue++;
                    yValue = parseInt(data[0][1]);
                }

                newDataCount = 1;

                $("#chartContainer").CanvasJSChart().render()
                setTimeout(updateData, 1500);
            }

            function updateData() {
                $.getJSON("https://canvasjs.com/services/data/datapoints.php?xstart="+xValue+"&ystart="+yValue+"&length="+newDataCount+"&type=json", addData);
            }

        }
    </script>

@endsection()
