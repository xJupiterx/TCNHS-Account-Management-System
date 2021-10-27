<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagaytay City National High School</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/app.css">
	<style>
		body{
			background:  url('background/background4.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			align-items: center;
			justify-content: center;
        }
	</style>
</head>

<body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="assets/images/icon.png" height="80" class='mb-4'>
                                <h3>Sign Up</h3>
                                <p>Register Account.</p>
                            </div>
                            <form action="register.php" method="POST">
								<?php include('errors.php') ?>
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="lastname-column">Last Name</label>
                                            <input type="text" id="lastname-column" class="form-control"
                                                name="lastname">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="firstname-column">First Name</label>
                                            <input type="text" id="firstname-column" class="form-control"
                                                name="firstname">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="middlename-column">Middle Name</label>
                                            <input type="text" id="middlename-column" class="form-control"
                                                name="middlename">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="username-column">Username</label>
                                            <input type="text" id="username-column" class="form-control"
                                                name="username">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="email-column">Email</label>
                                            <input type="email" id="email-column" class="form-control"
                                                name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="password-column">Password</label>
                                            <input type="password" id="password-column" class="form-control"
                                                name="password">
                                        </div>
                                    </div>
                                </diV>
                                <div class="clearfix">
                                    <input onclick="myFunction()" type="submit" name="Register" value="SIGN UP" class="btn btn-primary float-end" style="margin-right: 200px;">
                                </div>
                            </form>
                            <div class="divider">
                                <div class="divider-text">OR</div>
                            </div>
							<div class="row">
                                <div class="col-sm-6">
                                    <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i>
                                        Facebook</button>
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn btn-block mb-2 btn-secondary"><i data-feather="github"></i>
                                        Github</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>