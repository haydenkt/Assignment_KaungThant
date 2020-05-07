<?php include('layout/header.php') ?>
<?php require('db/dbconfig.php')?>
<section class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Airpollution</a>
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
                    <a class="nav-link text-white pr-md-5" href="#Effect">Effect</a>
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
                                <form method="post">
                                    <h2>Login</h2>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control w-75" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control w-75" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-outline-success">Login</button>
                                    <button type="buttonm" class="btn btn-secondary" id="hide">Cancel</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane p-5 fade" id="signup" role="tabpanel" aria-labelledby="nav-Signup-tab">
                            <div>
                                <form action="db/register.php" method="post">
                                    <h2>Signup</h2>
                                    <div class="form-group">
                                        <input type="email" class="form-control w-75" id="email" aria-describedby="emailHelp" placeholder="E-mail">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control w-75" id="username" placeholder="Name">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control w-75" id="password" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <input type="tel" class="form-control w-75" id="phno" placeholder="Ph-number">
                                    </div>

                                    <div class="form-group">
                                        <input type="date" class="form-control w-75" id="dob">
                                    </div>

                                    <div class="form-group">
                                        <input type="int" class="form-control w-75" id="post" placeholder="postal code">
                                    </div>

                                    <button type="submit" id="signupw" class="btn btn-outline-success">Sign up</button>
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

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="background1">
                    <div class="row">
                        <div class="col-3">
                        
                        </div>
                        <div class=" animated fadeInUp text-center col-6 mt-5 ">
                            <h2 class="mt-5">Lorem ipsum dolor</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem sequi eaque placeat, deserunt quod tenetur.</p>
                            <button type="button" class="btn btn-success" id="Get">Get Started</button>
                        </div>
                        <div class="col-3">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid">
    <div class="bg-dark">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="row mt-5">
                    <div class="col-3 text-success">
                        <i class="far fa-user fa-2x"></i>
                        <h2><span class="counter">12478</span></h2>
                        <p>Visitor</p>
                    </div>
                    <div class="col-3 text-success">
                        <i class="fas fa-calendar-alt fa-2x"></i>
                        <h2><span class="counter">253</span></h2>
                        <p>Events</p>
                    </div>
                    <div class="col-3 text-success">
                        <i class="fas fa-users fa-2x"></i>
                        <h2><span class="counter">253</span></h2>
                        <p>Memebers</p>
                    </div>
                    <div class="col-3 text-success">
                        <i class="fas fa-tree fa-2x"></i>
                        <h2><span class="counter">20000</span></h2>
                        <p>Saved Trees</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="About" class="container-fluid">
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-white">Airpollution</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/e6rglsLy1Ys" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>  
<section id="Definition">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-6">
                
                </div>
                <div class="col-6">
                    
                </div>
            </div>
        </div>
    </div>
</section>        
<section id="Cause">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-6">
                
                </div>
                <div class="col-6">
                
                </div>
            </div>
        </div>
    </div>
</section>        
<section id="Effect">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-4">
                
                </div>
                <div class="col-4">
                
                </div>
                <div class="col-4">
                
                </div>
            </div>
        </div>
    </div>
</section>        
<?php include('layout/footer.php')?>