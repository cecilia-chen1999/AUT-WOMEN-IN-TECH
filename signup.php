<!DOCTYPE HTML>
<html>
	<head>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<title>Sign Up | Women In Technology</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Women In Tech</a></h1>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="events.html">Events</a></li>
									<li><a href="gallery.html">Gallery</a></li>
									<li><a href="profiles.html">Profiles</a></li>
									<li><a href="mentoring.html">Mentoring</a></li>
									<li class="current"><a href="signup.html">Sign Up</a></li>
								</ul>
							</nav>

					</header>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">
                            <h2>Sign Up</h2>
                             
                            <?php
								
								$con = mysqli_connect('us-cdbr-east-05.cleardb.net','b14f7c20a4ae6e','39974f46');

                                if (!$con) {
                                    echo "Server error";
                                }

                                if (!mysqli_select_db($con,'heroku_86f69cc7fd22282')) {
                                    echo "Could not connect to database";
                                }

                                $firstName = $_POST['firstName'];
                                $lastName = $_POST['lastName'];
                                $email = $_POST['email'];
                                $tertiaryId = $_POST['tertiaryId'];
                                if(!isset($_POST['memberType'])){
                                    $memberType = '';
                                } else if ($_POST['memberType'] == 'student') {
                                    $memberType = 'Student';
                                } elseif ($_POST['memberType'] == 'staff') {
                                    $memberType = 'Staff';
                                } elseif ($_POST['memberType'] == 'alumni') {
                                    $memberType = 'Alumni';
                                }

                                $sql = "INSERT INTO members (
                                            firstName, 
                                            lastName, 
                                            email, 
                                            tertiaryId, 
                                            memberType,
                                        ) VALUES (
                                            '$firstName', 
                                            '$lastName',
                                            '$email',
                                            '$tertiaryId',
                                            '$memberType',
                                        )";

                                if(!mysqli_query($con, $sql)) {
                                    echo "Could not insert, please try again.";
                                } else {
                                    echo "<p><b>Thanks, " . $firstName . " for signing up, we will be in touch soon!</b></p>";
                                }

                            ?>

                            <form action="signup.php" method="POST">
								<label for="firstName">First Name:</label>
								<input type="text" id="firstName" name="firstName"><br>
								
								<label for="lastName">Last Name:</label>
								<input type="text" id="lastName" name="lastName"><br>
								
								<label for="email">Email:</label>
								<input type="text" id="email" name="email"><br>
								
								<label for="tertiaryId">Student/Staff ID:</label>
								<input type="text" id="tertiaryId" name="tertiaryId"><br>	
								
								<label for="memberType">Membership Type:</label>
								
								<div style="display:flex">
									<input type="radio" id="student" name="memberType" value="student">
									<label for="student">Student</label><br>
								</div>
									
								<div style="display:flex">
										<input type="radio" id="staff" name="memberType" value="staff">
										<label for="staff">Staff</label><br>
								</div>
									
								<div style="display:flex">
										<input type="radio" id="alumni" name="memberType" value="alumni">
										<label for="alumni">Alumni</label><br><br>
								</div>
												
                                <input style="text-align:center" type="submit" value="Submit">
                            </form>
							<br>
							<a href="members.php">Temp button to view members</a>
						</div>
					</div>
                </div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<!-- <div class="row">
							<div class="col-3 col-6-medium col-12-small">

								Contact
								<section class="widget contact">
										<h3>Contact Us</h3>
										<ul>
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										</ul>
								</section>

							</div>
						</div> -->
						<div class="row">
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; R&D Team, 2020. All rights reserved</li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>