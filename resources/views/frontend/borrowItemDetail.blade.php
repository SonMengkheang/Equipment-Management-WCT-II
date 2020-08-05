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
    <br><br>
    <div>
        <br><br>
        <div class="card easion-card">
        <div class="card-header text-white" style="background-color: white ; border: hidden" >
            <br><br>
            <div class="col-auto" style="margin-left: 60px">
                <a class="btn btn-success" href="{{url('/borrowItemList')}}">Back</a>
            </div>
        </div>
        <!--Main layout-->
        <main class="mt-5 pt-4">
            <div class="container dark-grey-text mt-5">

                <!--Grid row-->
                <div class="row wow fadeIn">
                    <!-- Image -->
                    <div class="col-md-6 mb-4">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" class="img-fluid" alt="">
                    </div>


                    <div class="col-md-6 mb-4">
                        <div class="row">
                            <div class="mb-4">
                                <h3><span class="badge purple mr-2">Category 2</span></h3>
                            </div>
                            <div class="mb-4">
                                <h3><span class="badge blue mr-2">New</span></h3>
                            </div>
                            <div class="mb-4">
                                <h3><span class="badge red mr-2">Bestseller</span></h3>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-4 font-weight-bold text-black-50 text-uppercase">
                                <p>Name</p>
                                <p>Code</p>
                                <p>Price</p>
                                <p>Color</p>
                                <p>Size</p>
                                <p>Stock</p>
                                <p>Upload Date</p>
                                <p>Update Date</p>
                            </div>
                            <div class="col-auto">
                                <p>Marker</p>
                                <p>Marker-012</p>
                                <p>2 $</p>
                                <p>Blue</p>
                                <p>Big Marker</p>
                                <p>20</p>
                                <p>1-1-2020;11:30:05 AM</p>
                                <p>2-1-2020;7:10:45 AM</p>
                            </div>
                        </div>
                        <p class=" font-weight-bold text-black-50 text-uppercase">Description</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia ipsa
                            sint voluptatibus!
                            Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>

                        <form class="d-flex justify-content-left">
                            <input type="number" min="0" value="1" aria-label="Search" class="form-control" style="width: 100px">
                            <button class="btn btn-primary btn-md my-0 p" type="submit">Borrow
                                <i class="fas fa-shopping-cart ml-1"></i>
                            </button>
                        </form>
                    </div>

                </div>


                <hr>

                <!--Grid row-->
                <div class="row d-flex justify-content-center wow fadeIn">

                    <!--Grid column-->
                    <div class="col-md-6 text-center">

                        <h4 class="my-4 h4"><i class="fas fa-star"></i>-- New Products --<i class="fas fa-star"></i></h4>

                        <p> We hope you enjoy our recommendation </p>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="container">
                    <div class="row wow fadeIn">
                    <div class="col-lg-3 col-md-12 mb-4">
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
                                <a class="btn btn-unique">View <i class="fas fa-eye"></i></a>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 mb-4">
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
                    <div class="col-lg-3 col-md-12 mb-4">
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
                                <a class="btn btn-unique">View <i class="fas fa-eye"></i></a>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 mb-4">
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
                                <a class="btn btn-unique">View <i class="fas fa-eye"></i></a>

                            </div>

                        </div>
                    </div>
                </div>
                </div>
                <!--Grid row-->

            </div>
        </main>
        <!--Main layout-->
    </div>
    </div>
    <br><br>

@endsection
