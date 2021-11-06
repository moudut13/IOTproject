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
            <div class="card card-table">
                <div class="card-header">
                    <h4 class="card-title">Appointment List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>Speciality</th>
                                <th>Patient Name</th>
                                <th>Apointment Time</th>
                                <th>Status</th>
                                <th class="text-right">Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="backend/assets/img/doctors/doctor-thumb-01.jpg" alt="User Image"></a>
                                        <a href="profile.html">Dr. Ruby Perrin</a>
                                    </h2>
                                </td>
                                <td>Dental</td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="backend/assets/img/patients/patient1.jpg" alt="User Image"></a>
                                        <a href="profile.html">Charlene Reed </a>
                                    </h2>
                                </td>
                                <td>9 Nov 2019 <span class="text-primary d-block">11.00 AM - 11.15 AM</span></td>
                                <td>
                                    <div class="status-toggle">
                                        <input type="checkbox" id="status_1" class="check" checked>
                                        <label for="status_1" class="checktoggle">checkbox</label>
                                    </div>
                                </td>
                                <td class="text-right">
                                    $200.00
                                </td>
                            </tr>
                            </tbody>
                        </table>
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
