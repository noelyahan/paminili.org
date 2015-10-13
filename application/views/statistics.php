<html>
<head>

    <script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
    <script>
        $(function () {

            function swapDivs(tohide, toshow) {
                $("#" + tohide).hide();
                $("#" + toshow).show();
            }

            var post_data;
            $('button').click(function () {
                var value = $(this).attr('data-value');
                var score = $(this).attr('data-score');
                var questionNo = $(this).attr('data-qno');
                if (post_data == null) {
                    post_data = {};
                }

                //when police is selected and next clicked
                if ($(this).attr('id') == "policeSelectedNextBtn") {
                    swapDivs("q1police", "q2complaintype");
                    post_data["province"] = $("provinceSelect").value
                    post_data["district"] = $("districtSelect").value
                    post_data["policestation"] = $("policeStationSelect").value
                } else if ($(this).attr('id') == "highestRatedBtn") {
                    window.open("<?php echo base_url();?>/main/loadBestRatedPoliceStations");
                } else if ($(this).attr('id') == "rapeBtn") {
                    window.open("<?php echo base_url();?>/main/loadHighestRapeComplains");
                } else if ($(this).attr('id') == "childBtn") {
                    window.open("<?php echo base_url();?>/main/loadHighestChildAbuseComplains");
                } else if ($(this).attr('id') == "domesticBtn") {
                    window.open("<?php echo base_url();?>/main/loadHighestDomesticViolenceComplains");
                } else if ($(this).attr('id') == "sexualBtn") {
                    window.open("<?php echo base_url();?>/main/loadProblemTypesGraph");
                } else if ($(this).attr('id') == "trafficBtn") {
                    window.open("<?php echo base_url();?>/main/loadHighestTrafficOffenceComplains");
                } else if ($(this).attr('id') == "theftBtn") {
                    window.open("<?php echo base_url();?>/main/loadHighestTheftComplains");
                } else if ($(this).attr('id') == "otherBtn") {
                    window.open("<?php echo base_url();?>/main/loadHighestOtherComplains");
                } else if ($(this).attr('id') == "worstRatedBtn") {
                    window.open("<?php echo base_url();?>/main/loadWorstRatedPoliceStations");
                }
            });
        });
    </script>

    <style type="text/css">@charset "UTF-8";
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-start {
            clip: rect(0, auto, auto, 0);
            -ms-zoom: 1.0001;
        }

        .ng-animate-active {
            clip: rect(1px, auto, auto, 0);
            -ms-zoom: 1;
        }</style>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Bootply snippet - Bootstrap </title>
    <meta name="generator" content="Bootply">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap  example snippet for Bootstrap.">
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--    <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">-->
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>

    <!-- CSS code from Bootply.com editor -->

    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Antic+Slab);

        html, body {
            height: 100%;
        }

        h1 {
            font-family: 'Antic Slab', serif;
            font-size: 80px;
            color: #DDCCEE;
        }

        .lead {
            color: #DDCCEE;
        }

        /* Custom container */
        .container-full {
            margin: 0 auto;
            width: 100%;
            min-height: 100%;
            background-color: #110022;
            color: #eee;
            overflow: hidden;
        }

        .container-full a {
            color: #efefef;
            text-decoration: none;
        }

        .v-center {
            margin-top: 7%;
        }

    </style>


</head>

<!-- HTML code from Bootply.com editor -->

<body>

<div class="container-full details">

    <div id="q2complaintype" class="row">

        <div class="col-lg-12 text-center v-center">

            <p class="lead" data-i18n="details.statistic.titles.title"></p>
            <br>

            <div class="container-fluid">
                <button id="highestRatedBtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.statistic.titles.bestrate"></button>
                <br>
                <button id="worstRatedBtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.statistic.titles.worst"></button>
                <br>
                <button id="sexualBtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.statistic.titles.sexual"
                    ></button>
                <br>
                <button id="rapeBtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.statistic.titles.rape"></button>
                <br>
                <button id="childBtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.statistic.titles.child"></button>
                <br>
                <button id="domesticBtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.statistic.titles.domestic"></button>
                <br>
                <button id="trafficBtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.statistic.titles.traffic"></button>
                <br>
                <button id="theftBtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.statistic.titles.theft"></button>
                <br>
                <button id="otherBtn" class="btn btn-primary btn-lg btn-block"
                        data-i18n="details.statistic.titles.other"></button>
                <br>
            </div>

        </div>

    </div>
    <!-- /row -->
</div>
<!-- /container full -->


<!--<script async="" src="//www.google-analytics.com/analytics.js"></script>-->
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>


<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>


<script type="text/javascript" src="<?php echo base_url();?>/assets/js/angular.min.js"></script>


<!-- JavaScript jQuery code from Bootply.com editor  -->

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->


<!--<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-40413119-1', 'bootply.com');
    ga('send', 'pageview');
</script>-->
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/i18next.js"></script>

<script type="text/javascript">
    var lang = localStorage.getItem('lan');
    var options = {
        lng: lang,
        resGetPath: "<?php echo base_url();?>/assets/locales/" + lang + "/translation.json"
    };
    i18n.init(options, function (t) {
        console.log(t);
        $(".details").i18n();
    });
</script>


</body>
</html>