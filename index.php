<?php include('layout/header.php') ?>
<section class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
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
                                <!-- <form method="post">
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
                                    <button type="button" class="btn btn-secondary" id="hide">Cancel</button>
                                </form> -->
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

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="background1">
                    <div class="row">
                        <div class="col-3">
                        
                        </div>
                        <div class=" animated fadeInUp text-center col-6 mt-5 ">
                            <h2 class="mt-5">How to improve air quality?</h2>
                            <p>Find out the causes, effects and solutions to air pollution, and how you can contribute to prevent, control and reduce it.</p>
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
            <div class="col-md-12 text-center col-sm-12">
                <div class="row p-5">
                    <div class="col-sm-3 text-success">
                        <i class="far fa-user fa-2x"></i>
                        <h2><span class="counter">12478</span></h2>
                        <p>Visitor</p>
                    </div>
                    <div class="col-sm-3 text-success">
                        <i class="fas fa-calendar-alt fa-2x"></i>
                        <h2><span class="counter">253</span></h2>
                        <p>Events</p>
                    </div>
                    <div class="col-sm-3 text-success">
                        <i class="fas fa-users fa-2x"></i>
                        <h2><span class="counter">253</span></h2>
                        <p>Memebers</p>
                    </div>
                    <div class="col-sm-3 text-success">
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
        <div class="row p-5">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h3 class="text-white">Airpollution</h3>
                        <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/e6rglsLy1Ys" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 text-white">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia ex quae, error debitis voluptatum doloribus laborum ipsa eveniet soluta similique.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="Definition" class="container-fluid">
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="row p-5">
                    <div class="col-md-6 col-sm-12">
                        <img src="images/4.jpg" alt="Nuclear power plant" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-white col-sm-12">
                        <div class="w-75">
                        <h4>Pollution?</h4>
                            <p>Air pollution can be defined as an alteration of air quality that can be characterized by measurements of chemical, biological or physical pollutants in the air. Therefore, air pollution means the undesirable presence of impurities or the abnormal rise in the proportion of some constituents of the atmosphere. It can be classified in 2 sections: visible and invisible air pollution.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>        
<section id="Cause" class="container-fluid">
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="row p-5">
                    <div class="col-md-6 text-white col-sm-12">
                        <div class="w-75">
                            <h4>Air Pollution <br> Causes</h4>
                            <p>Air pollution is caused by the presence in the atmosphere of toxic substances, mainly produced by human activities, even though sometimes it can result from natural phenomena such as volcanic eruptions, dust storms and wildfires, also depleting the air quality.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <img src="images/5.jpg" alt="Causes of airpollution." width="633" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>        
<section id="Effect" class="container-fluid">
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="row">
                    <div class="col-md-4 col-sm-12 p-3">
                        <div class="card h-100">
                            <img src="images/plant1.jpg" class="card-img-top" alt="Plant">
                            <div class="card-body">
                                <h5>On the Environment</h5>
                                <p class="card-text">Air pollution has a major impact on the process of plant evolution by preventing photosynthesis in many cases, with serious consequences for the purification of the air we breathe. It also contributes to the formation of acid rain, atmospheric precipitations in the form of rain, frost, snow or fog, which are released during the combustion of fossil fuels and transformed by contact with water steam in the atmosphere.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 p-3">
                        <div class="card h-100">
                            <img src="images/ice.jpg" class="card-img-top" alt="Ice Berg">
                            <div class="card-body">
                                <h5>Global Warming</h5>
                                <p class="card-text">On top of that, air pollution is a major contributor to global warming and climate change. In fact, the abundance of carbon dioxide in the air is one of the causes of the greenhouse effect. Normally, the presence of greenhouse gases should be beneficial for the planet because they absorb the infra-red radiation produced by the surface of the earth. But the excessive concentration of these gases in the atmosphere is the cause of the recent climate change.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 p-3">
                        <div class="card h-100">
                            <img src="images/mask1.jpg" class="card-img-top" alt="Gas Mask">
                            <div class="card-body">
                                <h5>On Human Health</h5>
                                <p class="card-text">Our continual exposure to air pollutants is responsible for the deterioration of human health. Air pollution is indeed a significant risk factor for human health conditions, causing allergies, respiratory and cardiovascular diseases as well as lung damage.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
<footer class="container-fluid">
    <div class="container-fluid bg-secondary">
        <div class="row p-5 text-white">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 col-sm-12 text-center">
                        <h3><b>About</b></h3>
                        <p>Definition</p>
                        <p>Causes</p>
                        <p>Effects</p>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center">
                        <label for="email"><b>Input your E-mail to Login.........</b></label>
                        <input type="email" name="email" id="email" class="form-control bg-transparent">
                    </div>
                    <div class="col-md-3 col-sm-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>      
<?php include('layout/footer.php')?>