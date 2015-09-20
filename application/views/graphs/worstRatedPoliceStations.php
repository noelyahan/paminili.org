<!doctype html>
<html>
<head>
    <title>Bar Chart</title>
    <script src="assets/js/Chart.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container-full">

    <div class="row">

        <div class="col-lg-12 text-center v-center">

            <p class="lead">Worst rated police stations</p>
            <br>

            <div style="width: 100%">
                <canvas id="canvas" height="450" width="600"></canvas>
            </div>

            <script>
                window.onload = function () {
                    var Url = "http://localhost/paminili.org/index.php/Statistics/getWorstRatedPoliceStation";

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
                                dataArray.push(data[i].avg_score);
                            }

                            var barChartData = {
                                labels: labelsArray,
                                datasets: [
                                    {
                                        fillColor: "rgba(255,0,0,0.5)",
                                        strokeColor: "rgba(151,187,205,0.8)",
                                        highlightFill: "rgba(255,0,0,0.75)",
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
