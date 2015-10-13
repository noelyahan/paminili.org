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
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">

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

            h1
            {
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

<div class="container-full">

    <div class="row">

        <div class="col-lg-12 text-center v-center">

            <p class="lead">Welcome to</p>

            <h1>Paminili.org</h1>

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

<div class="container">

    <hr>


    <div class="row">
        <div class="col-lg-12">
            <br><br>

            <p class="pull-right"><a href="http://www.bootply.com">2015 LEEDS All Rights Reserved.</a></p><a
                href="http://www.bootply.com">
                <br><br>
            </a></div>
        <a href="http://www.bootply.com">
        </a></div>
    <a href="http://www.bootply.com">
    </a></div>
<a href="http://www.bootply.com">


    
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>


    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/angular.min.js"></script>

    <!-- JavaScript jQuery code from Bootply.com editor  -->

    <script type="text/javascript">

        $(document).ready(function () {

        });

    </script>

    

    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/i18next.js"/>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript">
        $("#sinhala").click(function () {
            localStorage.setItem('lan','sinhala')
            window.location.href = "main/home";
            console.log("OK")
        });

        $("#tamil").click(function () {
            localStorage.setItem('lan','tamil')
            window.location.href = "main/home";
        });

        $("#english").click(function () {
            localStorage.setItem('lan','en')
            window.location.href = "main/home";
        });
    </script>

</a></body>
</html>