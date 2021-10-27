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
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="assets/images/icon.png" height="80" class='mb-4'>
                                <h3>Sign In</h3>
								<div class="divider">
									<div class="divider-text">Please Login your Account.</div>
								</div>
							</div>
                            <form action="login.php" method="POST">
								<?php include('errors.php') ?>
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Username</label>
                                    <div class="position-relative">
                                        <input type="text" name="username" class="form-control" id="username">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
									<label for="password">Password</label>
									<div class="position-relative">
                                        <input type="password" name="password" class="form-control" id="password">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
									<div class="clearfix">
                                        <a href="account-reset.php" class='float-end'>
                                            <small>Forgot password?</small>
                                        </a>
                                    </div>
                                </div>

                                <div class='form-check clearfix my-4'>
                                    <div class="checkbox float-start">
                                        <input type="checkbox" id="checkbox1" class='form-check-input'>
                                        <label for="checkbox1">Remember me</label>
                                    </div>
									<div class="float-end">
                                        <a href="register.php">Don't have an account?</a>
                                    </div>
                                </div>
								<div class="clearfix">
									<input type="submit" name="Login" value="LOGIN" class="btn btn-primary float-end">
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
							<br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>