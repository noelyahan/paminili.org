<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Paminili.org</title>
        <meta name="generator" content="Bootply">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/custom-styles.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--    <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
            <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">-->
    </head>

    <!-- HTML code from Bootply.com editor -->

    <body>



        <div id="wrapper">
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

                                                <a href="<?php echo base_url() ?>main/home" class="btn btn-primary btn-lg btn-block" id="sinhala">Sinhala</a>
                                                <a href="<?php echo base_url() ?>main/home" class="btn btn-primary btn-lg btn-block" id="tamil">Tamil</a>
                                                <a href="<?php echo base_url() ?>main/home" class="btn btn-primary btn-lg btn-block" id="english">English</a>

                                            </div>

                                        </div>

                                    </div>
                                    <!-- /row -->

                                </div>
                                <!-- /container full -->

                                <script async="" src="//www.google-analytics.com/analytics.js"></script>
                                <script type="text/javascript"
                                src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<!--                                <script type="text/javascript"
                                src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>-->
                                <script type="text/javascript"
                                src="<?php echo base_url() ?>assets/js/angular.min.js"></script>
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
                                src="<?php echo base_url() ?>/assets/js/i18next.js"></script>

                                <script type="text/javascript">
                                    var lang = localStorage.getItem('lan');
                                    var options = {
                                        lng: lang,
                                        resGetPath: "<?php echo base_url() ?>assets/locales/" + lang + "/translation.json"
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
                            <img src="<?php echo base_url() ?>assets/img/add1.PNG"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. WRAPPER  -->
        <!-- JS Scripts-->
        <!-- jQuery Js -->
        <script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.js"></script>
        <!-- Bootstrap Js -->
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <!-- Metis Menu Js -->
        <script src="<?php echo base_url() ?>assets/js/jquery.metisMenu.js"></script>
        <!-- Morris Chart Js -->
        <script src="<?php echo base_url() ?>assets/js/morris/raphael-2.1.0.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/morris/morris.js"></script>
        <!-- Custom Js -->
        <script src="<?php echo base_url() ?>assets/js/custom-scripts.js"></script>


        <a href="http://www.bootply.com">
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/angular.min.js"></script>
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