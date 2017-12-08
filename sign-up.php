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

<div class="login-container signup-container">
    <div class="text-center m-b-md">
        <h3>PLEASE SIGNUP</h3>
    </div>
    <div class="signup-panel">
      <div class="row">
         <div class="col-md-7 col-sm-12 col-xs-12">
            <h2>Create a free account</h2>
            <form id="signup_form" class="simple_form user" action="link.php" accept-charset="UTF-8" method="post">
               <input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="Y4GfGXE6NsQnHH0qyc8MLRL4uMLkkOStRbiqbKe3pfGr6yWEg3bHBVnhgIfJWAfkQV80zGaPLMBvSlNsbxV30Q==">
               <input name="invite" type="hidden">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="first-name-field">
                        First name
                        </label>
                        <input autofocus="autofocus" class="form-control input-lg" id="first-name-field" name="fn" placeholder="Michael" required="required" type="text">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="last-name-field">
                        Last name
                        </label>
                        <input class="form-control input-lg" id="last-name-field" name="ln" placeholder="Schofield" required="required" type="text">
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label for="email-field">
                  Professional email address
                  </label>
                  <input class="form-control input-lg" id="email-field" name="em" placeholder="michael.schofield@break.com" required="required" type="email">
               </div>
               <div class="form-group">
                  <label for="password-field">
                  Password
                  </label>
                  <input class="form-control input-lg" id="password-field" name="pass" placeholder="password" required="required" type="password">
               </div>
               <p class="terms-service">
                  By creating an account, you accept Emailio's
                  <a href="/terms-of-service">Terms of Service.</a>
               </p>
               <br>
               <button class="btn-lg signup-btn btn-success " data-loading="Signing you up..." type="submit">Sign me up</button>
            </form>
         </div>
         <div class="col-md-5 hidden-sm hidden-xs">
            <div class="su-side-panel">
               <h2 class="">Why should I create an account?</h2>
               <p>
                  <i class="fa fa-check"></i>
                  Get
                  <strong>150 free searches/month</strong>
               </p>
               <p>
                  <i class="fa fa-check"></i>
                  Verify any email address
               </p>
               <p>
                  <i class="fa fa-check"></i>
                  Download results in CSV
               </p>
               <p>
                  <i class="fa fa-check"></i>
                  Access the API for developers
               </p>
            </div>
         </div>
      </div>
   </div>
   <div class="already-login">
      Already have an account?
      <a href="login.php">Sign in</a>
   </div>
</div>

    <script src="js_old/jquery.min.js"></script>
    <script src="js_old/bootstrap.min.js"></script>
    <script src="js_old/jquery.easing.min.js"></script>
    <script src="js_old/wow.min.js"></script>
    <script src="js_old/jquery.scrollTo.js"></script>
    <script src="js_old/jquery.appear.js"></script>
    <script src="js_old/stellar.js"></script>
    <script src="js_old/custom.js"></script>
</body>
</html>
