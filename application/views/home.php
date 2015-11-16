<html lang="en">
    <head>
        <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-start{clip:rect(0,auto,auto,0);-ms-zoom:1.0001;}.ng-animate-active{clip:rect(-1px,auto,auto,0);-ms-zoom:1;}</style>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Paminili.org</title>
        <meta name="generator" content="Bootply">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/css/custom-styles.css" rel="stylesheet">
    </head>

    <!-- HTML code from Bootply.com editor -->
    <body class="details">
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
                            <li><a href="#"><i class="fa fa-sign-in fa-fw"></i> Login</a>
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

                                            <div class="container-full ">
                                                <div class="row">
                                                    <div class="col-lg-12 text-center v-center">
                                                        <h1>Paminili.org</h1>
                                                        <p class="lead">For a better police service</p>
                                                        <br>
                                                        <div class="container-fluid">
                                                            <a href="questions" class="btn btn-primary btn-lg btn-block" data-i18n="details.buttons.submitcomplain"></a>
                                                            <a href="statistics" class="btn btn-primary btn-lg btn-block" data-i18n="details.buttons.view_police_rank"></a>
                                                            <a href="help" class="btn btn-primary btn-lg btn-block" data-i18n="details.buttons.help"></a>
                                                        </div>
                                                    </div>
                                                </div> <!-- /row -->
                                                <br>
                                            </div> <!-- /container full -->
                                            <div class="container">
                                                <hr>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <br><br>
                                                       
                                                        <br><br>
                                                    </div>
                                                </div>
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



<!--<script async="" src="//www.google-analytics.com/analytics.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/angular.min.js"></script>
        <!-- JavaScript jQuery code from Bootply.com editor  -->
        <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/i18next.js"></script>

        <script type="text/javascript">
                                    var lang = localStorage.getItem('lan');
                                    var options = {
                                        lng: lang,
                                        resGetPath: "<?php echo base_url() ?>/assets/locales/" + lang + "/translation.json"
                                    };
                                    i18n.init(options, function (t) {
                                        console.log(t);
                                        $(".details").i18n();
                                    });
        </script>
    </body>
</html>