<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Email Verifier</title>


    <link href="css_old/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome_old/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="css_old/animate.css" rel="stylesheet" />
    <link href="css_old/style.css" rel="stylesheet">

</head>
<body class="blank">

<div class="login-container">
    <div class="row">
        <div class="col-md-12 form-panel">
            <div class="text-center m-b-md">
                <h3>PLEASE LOGIN</h3>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                        <h2>Welcome back!</h2>
                        <form action="login_valid.php" id="loginForm" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">User ID</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control login-input">
                            </div>
                            <div class="form-group mar-bt">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control login-input">
                            </div>
                            <button class="btn btn-success btn-block login-btn">Login</button>
                        </form>
                </div>
            </div>
            <div class="already-login" style="text-align: center;">
                <p>
                Don't have an account?
                <a href="sign-up.php">Sign up today</a>
                </p>
                <p>
                <a href="">Forgot your password?</a>
                </p>
            </div>
        </div>
    </div>
</div>

    <script src="js_old/jquery.min.js"></script>
    <script src="js_old/bootstrap.min.js"></script>
    <script src="js_old/jquery.easing.min.js"></script>
    <script src="js_old/wow.min.js"></script>
    <script src="js_old/jquery.scrollTo.js"></script>
    <script src="js_old/jquery.appear.js"></script>
    <script src="js-old/stellar.js"></script>
    <script src="js_old/custom.js"></script>

</body>
</html>
