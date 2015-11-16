<!doctype html>
<html>
    <head>
        <title>Bar Chart</title>
        <script src="http://localhost/paminili.org/assets/js/Chart.js"></script>
        <link rel="stylesheet" type="text/css" href="http://localhost/paminili.org/assets/css/style.css">
        <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/custom-styles.css" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url() ?>">Paminili.org</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="<?php echo base_url() ?>">
                        Home
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>main/index">
                        Feedback Questionnaire
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a href="<?php echo base_url() ?>statistics/">
                        View Statistics
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        About Us
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="<?php echo base_url() ?>login/logout"><i class="fa fa-sign-in fa-fw"></i> Login</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url() ?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <div class="container-full">

            <div class="row">

                <div class="col-lg-12 text-center v-center">

                    <p class="lead">Police stations with highest child abuse complains</p>
                    <br>

                    <div style="width: 80%">
                        <canvas id="canvas" height="100" width="200"></canvas>
                    </div>
                    <script>
                        window.onload = function() {
                            var Url = "<?php echo base_url() ?>/Statistics/getHighestChildAbuseComplaintCountByPoliceStation";

                            xmlHttp = new XMLHttpRequest();
                            xmlHttp.onreadystatechange = ProcessRequest;
                            xmlHttp.open("GET", Url, true);
                            xmlHttp.send(null);
                        }

                        function ProcessRequest() {
                            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                                console.log(xmlHttp.responseText);
                                if (xmlHttp.responseText != null) {

                                    var data = JSON.parse(xmlHttp.responseText);
                                    var labelsArray = [];
                                    var dataArray = [];

                                    for (var i = 0; i < data.length; i++) {
                                        labelsArray.push(data[i].name);
                                        dataArray.push(data[i].complaint_Count);
                                    }

                                    var barChartData = {
                                        labels: labelsArray,
                                        datasets: [
                                            {
                                                fillColor: "rgba(151,187,205,0.5)",
                                                strokeColor: "rgba(151,187,205,0.8)",
                                                highlightFill: "rgba(151,187,205,0.75)",
                                                highlightStroke: "rgba(151,187,205,1)",
                                                data: dataArray
                                            }
                                        ]

                                    }

                                    var ctx = document.getElementById("canvas").getContext("2d");
                                    window.myBar = new Chart(ctx).Bar(barChartData, {
                                        responsive: true
                                    });
                                }
                            }
                        }

                    </script>

                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container full -->

        <script async="" src="//www.google-analytics.com/analytics.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular.min.js"></script>

    </body>
</html>
