<?php
require_once('db/dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airpollution</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1bd71a138c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body class="bg-dark">
<section class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
        <a class="font" href="index.php">Airpollution</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">
            <ul class="nav">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#About">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#Definition">Definition</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#Cause">Cause</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#Effect">Effect</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white pr-md-5" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success font-weight-bold" id="Login">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link btn btn-outline-success rounded-pill text-white" id="Signup">Signup</a>
                </li> 
            </ul>
            <div class="modal" id="modal">
                <div class="modal-dialog">
                    <div class="modal-content mt-5">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link" id="nav-Login-tab" data-toggle="tab" href="#login" role="tab">Login</a>
                                <a class="nav-item nav-link" id="nav-Signup-tab" data-toggle="tab" href="#signup" role="tab">Signup</a>
                            </div>
                        </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade p-5 show" id="login" role="tabpanel" aria-labelledby="nav-Login-tab">
                            <div>
                                <form action="login.php" method="post">
                                    <h2>Login</h2>
                                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control w-75" name="username" required>
                                        <span class="help-block"><?php echo (!empty($username_err)) ?$username_err:''; ?>
                                    </div>
                                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control w-75" name="password" required>
                                        <span class="help-block"><?php echo (!empty($password_err))?$password_err:""; ?></span>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success" id="loginw">Login</button>
                                    <button type="button" class="btn btn-secondary" id="hide">Cancel</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane p-5 fade" id="signup" role="tabpanel" aria-labelledby="nav-Signup-tab">
                            <div>
                            <form action="db/insert.php" method="post">
                                <h2>Signup</h2>
                                <label for="username"><b>Username</b></label>
                                <input class="form-control" id="username" type="text" name="username" required>

                                <label for="password"><b>Password</b></label>
                                <input class="form-control" id="password"  type="password" name="password" required>

                                <label for="phonenumber"><b>Phone number</b></label>
                                <input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>

                                <label for="dateofbirth"><b>Date of Birth</b></label>
                                <input class="form-control" id="dateofbirth"  type="date" name="dateofbirth" required>

                                <label for="email"><b>Email</b></label>
                                <input class="form-control" id="email"  type="email" name="email" required>

                                <label for="postal"><b>Postal code</b></label>
                                <input class="form-control" id="postal"  type="int" name="postal" required>

                                <br>
                                <input class="btn btn-outline-primary" type="submit" id="register" name="create" value="Sign Up">
                                <button type="button" class="btn btn-secondary" id="hide1">Cancel</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </nav>
</section>