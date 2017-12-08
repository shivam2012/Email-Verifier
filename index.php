<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Email Verifier</title>

    <!-- css -->
    <link href="css_old/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome_old/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  	<link href="css_old/animate.css" rel="stylesheet" />
    <link href="css_old/animate.css" rel="stylesheet" />
    <link href="css_old/style.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">
                    <!-- <img src="img/logo.png" alt="" width="150" height="40" /> -->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav headings">
				<li class="active"><a href="#feature">FEATURE</a></li>
				<li><a href="#pricing">PRICING</a></li>
				<li><a href="#FAQ" style="margin-right: 530px;">FAQ</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="sign-up.php" class="signup">Sign Up</a></li>
			  </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h1 class="h-ultra">Email Verifier</h1>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light h-subtitle">Verify the deliverability of any email address with the most complete email checker.</h4>
					</div>
						<div class="well well-trans">
						<div class="wow fadeInRight" data-wow-delay="0.1s">
							<form action="mam_ver.php" method="post">
								<div class="input-group" id="feature">
									<input autocomplete="off" autofocus="autofocus" class="form-control input-lg" id="email-field" placeholder="johndoe@company.com" required="required" type="email" name="email">
										<span class="input-group-btn">
											<button class="btn-lg btn-default" data-loading="none" id="search-btn" type="submit">
											Verify
											</button>
										</span>
								</div>
								<br>
								<div class="emailfield-note">Type in an email address and press enter to verify it!</div>
							</form>
						</div>
						</div>
					</div>
					<div class="col-lg-2"></div>
				</div>
			</div>
		</div>
    </section>

	<!-- /Section: intro -->

	<!-- Section: boxes -->
    <section id="feature" class="home-section paddingtop-80">

		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">

							<!-- <i class="fa fa-check fa-3x circled bg-skin"></i> -->
							<h4 class="h-bold">Bulk Email Verifier</h4>
							<p>
							You need to verify a list of email addresses? Create a free account and discover our bulk Email Verifier.
							</p>
							<a class="feature-btn" href="sign-up.php">Create a free account</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">

							<!-- <i class="fa fa-list-alt fa-3x circled bg-skin"></i> -->
							<h4 class="h-bold">API</h4>
							<p>
							As with every other request, the Email Verifier can be used with a simple API call.
							</p>
							<a class="feature-btn" href="sign-up.php">Get Documentation</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							<!-- <i class="fa fa-check fa-3x circled bg-skin"></i> -->
							<h4 class="h-bold">Bulk Email Verifier</h4>
							<p>
							You need to verify a list of email addresses? Create a free account and discover our bulk Email Verifier.
							</p>
							<a class="feature-btn" href="sign-up.php">Create a free account</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<!-- Section: pricing -->
	<section id="pricing" class="home-section bg-gray paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Pricing Plans</h2>
					<p>Simple and transparent.</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

	</section>
	<!-- /Section: pricing -->


	<!-- Section: FAQ -->
	<section class="faq" id="FAQ">
   <div class="container">
      <h2 class="faq-heading">Common questions about the Email Verifications</h2>
      <strong class="faq-ques">
      Does an email address marked "deliverable" have no chance of bouncing?
      </strong>
      <p class="black">
         The verifications are never totally sure, but we can guarantee that
         more than 95% of "deliverable" email addresses won't bounce.
      </p>
      <strong class="faq-ques">
      What exactly does it mean when an email address is marked "risky"?
      </strong>
      <p class="black">
         When an email address is tagged "risky", it means the server check
         seems to work, but we have reason to believe the email may not be
         read by anyone.
      </p>
      <p class="black">This can happen in several cases, for example:</p>
      <ul class="black">
         <li>
            The email seems to be received, but the servers also seem to accept
            every email address
         </li>
         <li>
            The email seems to be received, but it looks like gibberish (for
            example "e9v3mc3@company.com")
         </li>
      </ul>
      <strong class="faq-ques">How many requests are counted for Email Verifications?</strong>
      <p class="black">
         Every verification counts as one request. With a
         <a href="/users/sign_up">free account</a>, you can
         use up to 150 requests/month. If you need more, you can upgrade to
         the plan that suits your needs. Please check our
         <a href="/pricing">pricing</a> for more information.
      </p>
      <strong class="faq-ques">What do you check for when verifying emails?</strong>
      <p class="black">
         This is the list of verifications we do:
      </p>
      <ul class="black">
         <li>
            Valid format: First, we verify the format of the email address is
            correct and looks something like "email@provider.com".
         </li>
         <li>
            Gibberish Email Address: We check to ensure the address doesn't look
            like a random email address. For example, 1e49cs1pb6@company.com doesn't
            pass the test.
         </li>
         <li>
            Disposable Email Address: We check if the email address has a domain
            name used for temporary email addresses.
         </li>
         <li>
            Webmail Email Addresses: We verify if the email address uses a webmail
            like Gmail or Yahoo.
         </li>
         <li>
            Presence of MX Records: We check if there are MX records on the
            domain. If there aren't, the email address can't receive emails.
         </li>
         <li>
            Presence of SMTP Server: This check is successful if we are able to
            connect to the SMTP server (indicated in MX records).
         </li>
         <li>
            SMTP Check: We test the email address and see if it bounces or not.
         </li>
         <li>
            Accept-all Domain: We check if the server has a catch-all policy which
            accepts all the email addresses.
         </li>
      </ul>
      <br>
      <br>
      <div style="text-align: center;">
         <a class="white-btn btn-lg faq-btn" href="" target="_blank">
         See all the frequently asked questions
         </a>
      </div>
   </div>
</section>

	<!-- /Section: FAQ -->
	<footer>

    <div class="jumbotron">
        <div class="row no-margin">
  	<div class="col-md-3">
                <img src="image/data/logo-white.png">
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <ul>
                            <li>
                               COMPANY                          </li>
                                                        <li>
                                <a href="">Blog</a>
                            </li>
                                                        <li>
                                <a href="">About Us</a>
                            </li>
                                                        <li>
                                <a href="">Jobs</a>
                            </li>
                                                        <li>
                                <a href="" target="_blank">Bug Bounty</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <ul>
                            <li>
                                PRODUCT                       </li>
                            <li>
                                <a href="">Email Verifier</a>
                            </li>
                            <li>
                                <a href="">Mail Tracker</a>
                            </li>
                            <li>
                                <a href="">API/Docs</a>
                            </li>
                            <li>
                                <a href="">Email Verifier</a>
                            </li>
                            <li>
                                <a target="_blank" href="">Email Verifier</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <ul>
                            <li>
                                REACH US
                            </li>
                            <li>
                                <a href="" class="">Help Centre</a>
                            </li>
                            <li>
                                <a href="" target="_top" class="">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row" id="icon-row">
                    <div class="col-md-6">
                        <a target="_blank" href="">
                            <img src="image/data/graphics/facebook.svg">
                        </a>
                        <a target="_blank" href="">
                            <img src="image/data/graphics/twitter.svg">
                        </a>
                        <a target="_blank" href="">
                            <img src="image/data/graphics/linked-in.svg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
    <copyright>
	    <div class="right-terms">
			<a href="/terms-of-service">Terms of service</a>
			<span class="dot">•</span>
			<a href="/privacy-policy">Privacy Policy</a>
			<span class="dot">•</span>
			<a href="/security-policy">Security Policy</a>
			<span class="dot">•</span>
			<a href="/companies">Companies directory</a>
		</div>
	</copyright>
</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
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
