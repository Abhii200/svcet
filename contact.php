<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Sri Venkateswara College of Engineering & Technology</title>

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Porto - Multipurpose Website Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demos/demo-medical.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="css/skins/skin-medical.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>
        
		<div class="body">
        <?php include 'header.php'; ?>

			<div role="main" class="main">
                 
				<section class="page-header page-header-modern page-header-md" style="background-color:#840103; height:6px; margin-Bottom:-10px;">
					<div class="container" >
						<div class="row" style="margin-top:-5px;">

							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1>Contact</h1>
								<!-- <span class="sub-title">About Us</span> -->
							</div>
							<div class="col-md-4 order-1 order-md-2 align-self-center">
								<ul class="breadcrumb d-block text-md-end breadcrumb-light">
									<li><a href="demo-medical.html">Home</a></li>
									<li class="active">Admissions</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
                 
				<div class="container">
                <div class="row">					 
						<div class="col">
                            <br></br>
                        <h4 class="mb-4">CONTACT</h4>
                        <div class="card bg-color-light-scale-1 mb-4">
                            <div class="card-body">
                                <form class="contact-form form-style-2" action="https://formspree.io/f/mbjnnzjj" method="POST">
                                    <div class="contact-form-success alert alert-success d-none mt-4">
                                        <strong>Success!</strong> Your message has been sent to us.
                                    </div>

                                    <div class="contact-form-error alert alert-danger d-none mt-4">
                                        <strong>Error!</strong> There was an error sending your message.
                                        <span class="mail-error-message text-1 d-block"></span>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <label class="form-label text-2">First Name</label>
                                            <input type="text" class="form-control text-3 h-auto py-2" name="fname" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label text-2">Last Name</label>
                                            <input type="text" class="form-control text-3 h-auto py-2" name="lname" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <label class="form-label text-2">Email Address</label>
                                            <input type="email" class="form-control text-3 h-auto py-2" name="email" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label text-2">Mobile Number</label>
                                            <input type="tel" class="form-control text-3 h-auto py-2" name="phno" required required pattern="[0-9]{10}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label text-2">Message</label>
                                            <textarea class="form-control text-3 h-auto py-2" name="msg" rows="8" required></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <button type="submit" name="see" class="btn btn-primary">Submit Form</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


						</div>
					</div>

				</div>
                </section>      
			</div>

			<?php include 'footer.php'; ?>
		</div>

		<!-- Vendor -->
		<script src="vendor/plugins/js/plugins.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="js/demos/demo-medical.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	</body>
</html>
