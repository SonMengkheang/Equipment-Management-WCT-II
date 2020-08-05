@extends('frontend.homepageLayout')

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

@section('homepage')
    <br><br><br><br>
    <div class="card easion-card">
        <div class="container">
            <br>
            <div class="card-header " style="background-color: white ; border: hidden ; margin-left: -10px" >
                <a class="btn btn-success" href="{{url('/')}}">Back</a>
                <h3 class="text-black-50 text-center">Click on View to borrow Item...</h3>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-cascade narrower">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                                     alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">

                                <!-- Label -->
                                <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> Culinary</h5>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                                <!-- Text -->
                                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                    laboriosam, nisi ut aliquid ex ea commodi.</p>
                                <!-- Button -->
                                <a class="btn btn-unique text-white" href="{{url('/homepage/borrowItem/{id}')}}">View <i class="fas fa-eye"></i></a>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-cascade wider">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                                     alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">

                                <!-- Label -->
                                <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> Culinary</h5>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                                <!-- Text -->
                                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                    laboriosam, nisi ut aliquid ex ea commodi.</p>
                                <!-- Button -->
                                <a class="btn btn-unique text-white" href="{{url('/homepage/borrowItem/{id}')}}">View <i class="fas fa-eye"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-cascade narrower">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                                     alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">

                                <!-- Label -->
                                <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> Culinary</h5>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                                <!-- Text -->
                                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                    laboriosam, nisi ut aliquid ex ea commodi.</p>
                                <!-- Button -->
                                <a class="btn btn-unique text-white" href="{{url('/homepage/borrowItem/{id}')}}">View <i class="fas fa-eye"></i></a>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-cascade narrower">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                                     alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">

                                <!-- Label -->
                                <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> Culinary</h5>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                                <!-- Text -->
                                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                    laboriosam, nisi ut aliquid ex ea commodi.</p>
                                <!-- Button -->
                                <a class="btn btn-unique text-white" href="{{url('/homepage/borrowItem/{id}')}}">View <i class="fas fa-eye"></i></a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <br><br>
@endsection
