<html lang="en">
<head>
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
            clip: rect(-1px, auto, auto, 0);
            -ms-zoom: 1;
        }</style>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Paminili.org</title>
    <meta name="generator" content="Bootply">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--    <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">-->


    <!-- CSS code from Bootply.com editor -->

    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Antic+Slab);

        html, body {
            height: 100%;
        }

        h1 {
            /*width:100em;*/
            /*height:auto;*/
            font-family: 'Antic Slab', serif;
            font-size: 8.5em;
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
    <style type="text/css"></style>
</head>

<!-- HTML code from Bootply.com editor -->

<body>
<a href="<?php echo base_url(); ?>login/logout">LOGOUT</a>


<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="post_test.php">Paminili.org</a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a href="post_test.php">
                    Home
                </a>
            </li>
            <li>
                <a href="questions.php">
                    Feedback Questionnaire
                </a>
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
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
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Login</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>
    <!--    <div id="page-wrapper">-->
    <div id="page-inner">
        <div class="col-md-9">
            <div class="panel panel-primary no-boder bg-color-blue panel-large-margin">
                <div class="panel-body">
                    <div class="container-full details">

                        <div class="container-full">

                            <div class="row">

                                <div class="col-lg-12 text-center v-center">

                                    <p class="lead">Welcome to</p>

                                    <h1>Paminili.org Feedback Questionnaire</h1>

                                    <p>You can rate the feedback received at a Police Station via this
                                        questionnaire.</p>

                                    <p class="lead">Please select your language</p>

                                    <br>

                                    <div class="container-fluid">

                                        <a href="#" class="btn btn-primary btn-lg btn-block" id="sinhala">Sinhala</a>
                                        <a href="#" class="btn btn-primary btn-lg btn-block" id="tamil">Tamil</a>
                                        <a href="#" class="btn btn-primary btn-lg btn-block" id="english">English</a>

                                    </div>

                                </div>

                            </div>
                            <!-- /row -->

                        </div>
                        <!-- /container full -->

                        <script async="" src="//www.google-analytics.com/analytics.js"></script>
                        <script type="text/javascript"
                                src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                        <script type="text/javascript"
                                src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
                        <script type="text/javascript"
                                src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular.min.js"></script>

                        <!-- JavaScript jQuery code from Bootply.com editor  -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

                        <script>
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
                            ga('send', 'pageview');</script>
                        <script type="text/javascript"
                                src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                        <script type="text/javascript"
                                src="https://cdnjs.cloudflare.com/ajax/libs/i18next/1.9.0/i18next.js"></script>

                        <script type="text/javascript">
                            var lang = localStorage.getItem('lan');
                            var options = {
                                lng: lang,
                                resGetPath: "http://localhost/UI_Test/assets/locales/" + lang + "/translation.json"
                            };
                            i18n.init(options, function (t) {
                                console.log(t);
                                $(".details").i18n();
                            });
                            //loadPoliceDevisions(null,lang);
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-primary text-center no-boder bg-color-blue">
                <div class="panel-body">
                    <img src="assets/img/add1.PNG"/>
                </div>
            </div>
        </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


    <a href="http://www.bootply.com">


        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>


        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/angular.min.js"></script>

        <!-- JavaScript jQuery code from Bootply.com editor  -->

        <script type="text/javascript">

            $(document).ready(function () {

            });

        </script>


        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/i18next.js"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
        <script type="text/javascript">
            $("#sinhala").click(function () {
                localStorage.setItem('lan', 'sinhala')
                window.location.href = "main/home";
                console.log("OK")
            });

            $("#tamil").click(function () {
                localStorage.setItem('lan', 'tamil')
                window.location.href = "main/home";
            });

            $("#english").click(function () {
                localStorage.setItem('lan', 'en')
                window.location.href = "main/home";
            });
        </script>

    </a>
</body>
</html>