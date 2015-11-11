<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Bootstrap Login Form</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>assets/js/view/login.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                Login.init();
                Login.baseURL="<?php echo base_url();?>";
            });
        </script>
        
    </head>
    <body>
        <!--login modal-->
        <div id="loginModal" class="modal show container-full" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="text-center">Login</h1>
                    </div>
                    <div class="modal-body">
                        <form class="form col-md-12 center-block">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" placeholder="User Name" name="userNameText" id="userNameText"/>
                            </div>
                            <div class="form-group">
                                <input type="password" name="passwordText" id="passwordText" class="form-control input-lg" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <button name="loginBtn" id="loginBtn" class="btn btn-primary btn-lg btn-block">Sign In</button>
                                <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>