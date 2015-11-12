﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Free Bootstrap Admin Template : Dream</title>
        
        
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/custom-styles.css" rel="stylesheet">
            
            <!-- Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        
        
    </head>

<body>
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
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="col-md-9">
                <div class="panel panel-primary no-boder bg-color-blue panel-large-margin">
                    <div class="panel-body">
                        <h3 class="page-header">
                            <img src="assets/img/update_status_icon.png"/>
                            Update Status
                        </h3>
                        <textArea class="form-control"></textArea></br>
                        <div class="text-right">
                            <input class="btn btn-primary" type="button" value="Post"/>
                        </div>
                    </div>
                </div>

                <div class="panel panel-primary no-boder">
                    <div class="panel-body">
                        <h4 class="page-header bg-color-blue bold">
                            <img src="assets/img/user_icon.png"/>
                            Ershadi Sayuri Jayatilaka
                            <small>1 hour ago</small>
                        </h4>
                        <div class="page-header">
                            Behalf of Batch Reps,
                            Please answer this poll regarding the rescheduling of the Formal Specs, tutorial from
                            Wednesday to Friday along with the part timers from 7 on wards right after the lecture.
                            Saman sir wanted a head count regarding this matter ASAP.
                            Thank You.
                        </div>
                        <div class="text-left">
                            <div class="bg-color-blue col-md-2"><h6><img src="assets/img/like_icon.png"/>Like</h6>
                            </div>
                            <div class="col-md-2"><h6><img src="assets/img/dislike_icon.png"/>Dislike</h6></div>
                            <div class="col-md-5"><h6><img src="assets/img/comment_icon.png"/>Comment</h6></div>
                        </div>
                        <div class="col-md-12 ashbox panel">
                            <!--posted comments-->
                            <div class="col-md-12 panel">
                                <div class="col-md-1"><img src="assets/img/comment_user_icon.png"/></div>
                                <h5 class="bg-color-blue bold">Noel Yahan
                                    <small>2 hours ago</small>
                                </h5>
                                <div class="col-md-12 font-black panel">Good work Machan</div>
                                <div class="col-md-12 text-left ashbox panel panel-small">
                                    <h6>
                                        <div class="col-md-1">Like</div>
                                        <div class="col-md-1">Dislike</div>
                                        <div class="col-md-1"><a data-toggle="collapse" data-parent="#accordion"
                                                                 href="#reply-box" class="">Reply</a></div>
                                    </h6>
                                </div>
                            </div>

                            <!--user reply-->
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-10 panel">
                                <div class="col-md-1"><img src="assets/img/comment_user_icon.png"/></div>
                                <h5 class="bg-color-blue bold">Nilupul Liyanage
                                    <small>2 hours ago</small>
                                </h5>
                                <div class="col-md-10 font-black panel">Good work Machan</div>
                                <div class="col-md-10 text-left ashbox panel panel-small">
                                    <h6>
                                        <div class="col-md-1">Like</div>
                                        <div class="col-md-2">Dislike</div>
                                        <div class="col-md-1"><a data-toggle="collapse" data-parent="#accordion"
                                                                 href="#reply-box" class="">Reply</a></div>
                                    </h6>
                                </div>
                            </div>
                            <!--end user reply-->

                            <!--reply to a user comment-->
                            <div class="col-md-2">
                            </div>
                            <div id="reply-box" class="col-md-10 panel collapse">
                                <div class="col-md-12">
                                    <div class="col-md-1"><img src="assets/img/comment_user_icon.png"/></div>
                                    <h5 class="bg-color-blue bold col-md-7">Sachith Ushan</h5>

                                    <div class="col-md-12 font-black">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                   placeholder="Write a reply...">
                                                    <span class="input-group-btn">
                                                        <img class="btn btn-default" src="assets/img/enter_icon.png"/>Go
                                                    </span>
                                        </div>
                                        <!--user comments-->
                                        <div class="col-md-12 panel">
                                            <div class="col-md-12">
                                                <div class="col-md-1"><img src="<?php echo base_url(); ?>assets/img/comment_user_icon.png"/></div>
                                                <h5 class="bg-color-blue bold col-md-10">Sachith Ushan</h5>
                                                <div class="col-md-12 font-black">
                                                    <div class="input-group">
          <input type="text" class="form-control" placeholder="Write a comment...">
          <span class="input-group-btn">
              <img class="btn btn-default" src="<?php echo base_url(); ?>assets/img/enter_icon.png"/>Go
          </span>
        </div>
                                                </div>
                                            </div>
                                        </div>
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
 <div class="col-md-3">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                    <div class="panel-body">
                        <img src="assets/img/add2.PNG"/>
                        <img src="assets/img/add3.PNG"/>
                    </div>
                </div>
            </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
        <!-- JS Scripts-->
        <!-- jQuery Js -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
        <!-- Bootstrap Js -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <!-- Metis Menu Js -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.metisMenu.js"></script>
        <!-- Morris Chart Js -->
        <script src="<?php echo base_url(); ?>assets/js/morris/raphael-2.1.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/morris/morris.js"></script>
        <!-- Custom Js -->
        <script src="<?php echo base_url(); ?>assets/js/custom-scripts.js"></script>
    </body>
</html>