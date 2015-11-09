<html lang="en"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-start{clip:rect(0,auto,auto,0);-ms-zoom:1.0001;}.ng-animate-active{clip:rect(-1px,auto,auto,0);-ms-zoom:1;}</style>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Login</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/view/login.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                Login.init();
                Login.baseURL="<?php echo base_url();?>";
            });
        </script>
    <body class="details">
        <input type="text" name="userNameText" id="userNameText"/>
        <input type="password" name="passwordText" id="passwordText"/>
        <input type="button" name="loginBtn" id="loginBtn" value="Login"/>

    </body>
</html>