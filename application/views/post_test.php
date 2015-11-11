<!DOCTYPE html>
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Paminili.org</a>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Doe</strong>
                                        <span class="pull-right text-muted">
                                            <em>Today</em>
                                        </span>
                                    </div>
                                    <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class="pull-right text-muted">28% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                                <span class="sr-only">28% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <span class="pull-right text-muted">85% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                                <span class="sr-only">85% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 min</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 min</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 min</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 min</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 min</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-alerts -->
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
                    <div class="row">
                        <div class="col-md-8">
                            <div class="panel panel-primary no-boder bg-color-blue">
                                <div class="panel-body">
                                    <h3 class="page-header">
                                        <img src="<?php echo base_url(); ?>assets/img/update_status_icon.png"/>
                                        Update Status
                                    </h3>
                                    <textArea class="form-control"></textArea></br>
                                    <div class="text-right">
                                        <input class="btn btn-primary" type="button" value="Post"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-primary text-center no-boder bg-color-blue">
                                <div class="panel-body">
                                    
                                    
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                    <!-- row -->
                     <div class="row">
                        <div class="col-md-8">
                            <div class="panel panel-primary no-boder">
                                <div class="panel-body">
                                    <h4 class="page-header bg-color-blue bold">
                                        <img src="<?php echo base_url(); ?>assets/img/user_icon.png"/>
                                        Ershadi Sayuri Jayatilaka <small>1 hour ago</small>
                                    </h4>
                                    <div class="page-header">
                                        Behalf of Batch Reps,
                                        Please answer this poll regarding the rescheduling of the Formal Specs, tutorial from Wednesday to Friday along with the part timers from 7 on wards right after the lecture. 
                                        Saman sir wanted a head count regarding this matter ASAP. 
                                        Thank You.
                                    </div>
                                    <div class="text-left">
                                        <div class="bg-color-blue col-md-2"><h6><img src="<?php echo base_url(); ?>assets/img/like_icon.png"/>Like</h6></div>
                                        <div class="col-md-2"><h6><img src="<?php echo base_url(); ?>assets/img/dislike_icon.png"/>Dislike</h6></div>
                                        <div class="col-md-5"><h6><img src="<?php echo base_url(); ?>assets/img/comment_icon.png"/>Comment</h6></div>
                                    </div>
                                    <div class="col-md-12 ashbox">
                                        <!--posted comments-->
                                        <div class="page-header">
                                            <div class="col-md-12 whitebox">
                                                <div class="col-md-1"><img src="<?php echo base_url(); ?>assets/img/comment_user_icon.png"/></div>
                                                <h5 class="bg-color-blue bold">Noel Yahan <small>2 hours ago</small></h5>
                                                <div class="col-md-5 font-black">Good work Machan</div>
                                            </div>
                                            <div class="text-left comment-header">
                                                <div class="col-md-1"><h6>Like</h6></div>
                                                <div class="col-md-1"><h6>Dislike</h6></div>
                                                <div class="col-md-5"><h6>Comment</h6></div>
                                            </div>
                                        </div>
                                        <!--user comments-->
                                        <div class="col-md-12 whitebox">
                                            <div class="col-md-12 whitebox">
                                                <div class="col-md-1"><img src="<?php echo base_url(); ?>assets/img/comment_user_icon.png"/></div>
                                                <h5 class="bg-color-blue bold">Sachith Ushan</h5>
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
                        <div class="col-md-4">
                            <div class="panel panel-primary text-center no-boder bg-color-blue">
                                <div class="panel-body">
                                    
                                    
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
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