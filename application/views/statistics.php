<html>
    <head>

        <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
        <script>
            $(function() {

                function swapDivs(tohide, toshow) {
                    $("#" + tohide).hide();
                    $("#" + toshow).show();
                }

                var post_data;
                $('button').click(function() {
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
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/custom-styles.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
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
        <div class="container-full details">

            <div id="q2complaintype" class="row">
                <div class="col-lg-12 text-center v-center">

                    <p class="lead" data-i18n="details.statistic.titles.title"></p>
                    <br>

                    <div class="container-fluid">
                        <a id="highestRatedBtn" href="<?php echo base_url(); ?>main/loadBestRatedPoliceStations" class="btn btn-primary btn-lg btn-block"
                           data-i18n="details.statistic.titles.bestrate"></a>
                        <br>
                        <a id="worstRatedBtn" href="<?php echo base_url(); ?>main/loadWorstRatedPoliceStations" class="btn btn-primary btn-lg btn-block"
                           data-i18n="details.statistic.titles.worst"></a>
                        <br>
                        <a id="sexualBtn" href="<?php echo base_url(); ?>main/loadProblemTypesGraph" class="btn btn-primary btn-lg btn-block"
                           data-i18n="details.statistic.titles.sexual"
                           ></a>
                        <br>
                        <a id="rapeBtn" href="<?php echo base_url(); ?>main/loadHighestRapeComplains" class="btn btn-primary btn-lg btn-block"
                           data-i18n="details.statistic.titles.rape"></a>
                        <br>
                        <a id="childBtn" href="<?php echo base_url(); ?>main/loadHighestChildAbuseComplains" class="btn btn-primary btn-lg btn-block"
                           data-i18n="details.statistic.titles.child"></a>
                        <br>
                        <a id="domesticBtn" href="<?php echo base_url(); ?>main/loadHighestDomesticViolenceComplains" class="btn btn-primary btn-lg btn-block"
                           data-i18n="details.statistic.titles.domestic"></a>
                        <br>
                        <a id="trafficBtn" href="<?php echo base_url(); ?>main/loadHighestTrafficOffenceComplains" class="btn btn-primary btn-lg btn-block"
                           data-i18n="details.statistic.titles.traffic"></a>
                        <br>
                        <a id="theftBtn" href="<?php echo base_url(); ?>main/loadHighestTheftComplains" class="btn btn-primary btn-lg btn-block"
                           data-i18n="details.statistic.titles.theft"></a>
                        <br>
                        <a id="otherBtn" href="<?php echo base_url(); ?>main/loadHighestOtherComplains" class="btn btn-primary btn-lg btn-block"
                           data-i18n="details.statistic.titles.other"></a>
                        <br>
                    </div>

                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container full -->


<!--<script async="" src="//www.google-analytics.com/analytics.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>


        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/angular.min.js"></script>


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
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/i18next.js"></script>

        <script type="text/javascript">
                var lang = localStorage.getItem('lan');
                var options = {
                    lng: lang,
                    resGetPath: "<?php echo base_url(); ?>/assets/locales/" + lang + "/translation.json"
                };
                i18n.init(options, function(t) {
                    console.log(t);
                    $(".details").i18n();
                });
        </script>


    </body>
</html>