@extends('frontend.homepageLayout')
<!--     css-->
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<!--    javascript-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

@section('homepage')
    <br><br>
    <div class="container">
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Your Team</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <!-- Card -->
                        <div class="card gradient-card">
                            <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg)">
                                <!-- Content -->
                                <a href="{{url('borrowItemList')}}" style="text-decoration: none">
                                    <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                                        <div class="first-content align-self-center p-3">
                                            <h3 class="card-title">IT Department</h3>
                                            <p class="lead mb-0">STEM 105 by Srun Sovila</p>
                                        </div>
                                        <div class="second-content align-self-center mx-auto text-center">
                                            <i class="far fa-money-bill-alt fa-3x"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Data -->
                            <div class="third-content ml-auto mr-4 mb-2">
                                <p class="text-muted text-right">Take your utility today... </p>
                                <h4 class="font-weight-bold float-right">Get in to borrow</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <!-- Card -->
                        <div class="card gradient-card">
                            <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg)">
                                <!-- Content -->
                                <a href="{{url('borrowItemList')}}" style="text-decoration: none">
                                    <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                                        <div class="first-content align-self-center p-3">
                                            <h3 class="card-title">IT Department</h3>
                                            <p class="lead mb-0">STEM 105 by Srun Sovila</p>
                                        </div>
                                        <div class="second-content align-self-center mx-auto text-center">
                                            <i class="far fa-money-bill-alt fa-3x"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Data -->
                            <div class="third-content ml-auto mr-4 mb-2">
                                <p class="text-muted text-right">Take your utility today... </p>
                                <h4 class="font-weight-bold float-right">Get in to borrow</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <!-- Card -->
                        <div class="card gradient-card">
                            <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg)">
                                <!-- Content -->
                                <a href="{{url('borrowItemList')}}" style="text-decoration: none">
                                    <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                                        <div class="first-content align-self-center p-3">
                                            <h3 class="card-title">IT Department</h3>
                                            <p class="lead mb-0">STEM 105 by Srun Sovila</p>
                                        </div>
                                        <div class="second-content align-self-center mx-auto text-center">
                                            <i class="far fa-money-bill-alt fa-3x"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Data -->
                            <div class="third-content ml-auto mr-4 mb-2">
                                <p class="text-muted text-right">Take your utility today... </p>
                                <h4 class="font-weight-bold float-right">Get in to borrow</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ml-auto"><p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p></div>
                    <div class="col-lg-4 mr-auto"><p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p></div>
                </div>
            </div>
        </section>

        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label>
                                    <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label>
                                    <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label>
                                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
