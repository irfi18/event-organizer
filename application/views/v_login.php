<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap4/css/bootstrap.min.css'); ?>">
    <link href="<?php echo base_url('asset/validetta/validetta.css'); ?>" rel="stylesheet" type="text/css" media="screen" >
    <style>
        .form-signin
        {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading, .form-signin .checkbox
        {
            margin-bottom: 10px;
        }
        .form-signin .checkbox
        {
            font-weight: normal;
        }
        .form-signin .form-control
        {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .form-signin .form-control:focus
        {
            z-index: 2;
        }
        .form-signin input[type="text"]
        {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .form-signin input[type="password"]
        {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .account-wall
        {
            margin-top: 20px;
            padding: 40px 0px 20px 0px;
            background-color: #f7f7f7;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .login-title
        {
            color: #555;
            font-size: 18px;
            font-weight: 400;
            display: block;
        }
        .profile-img
        {
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        .need-help
        {
            margin-top: 10px;
        }
        .new-account
        {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h1 class="text-center login-title">Masuk Administrator</h1>
            <?php if(isset($error)) { echo $error; }; ?>
            <div class="account-wall text-center">
                <img class="profile-img" src="<?php echo base_url('admin.png'); ?>"
                    alt="">    
                    <form action="<?php echo site_url('login/post_admin'); ?>" method="post" id="form">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda" autofocus>
                    <?php echo form_error('username'); ?>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
                    <?php echo form_error('password'); ?>
                </div>

                <button class="btn btn-lg btn-primary btn-block" name="btn-login" id="btn-login" type="submit">
                Masuk</button>
                <br>
                <a href="<?php echo site_url('home'); ?>"> Bukan Admin?</a>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap4/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/validetta/validetta.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/validetta/lang/validettaLang-ID.js'); ?>"></script>
<script>
		$(document).ready(function() {
			$("#form").validetta({
				bubblePosition: 'bottom',
				realTime : true,
			});
		});
	</script>
</body>
</html>