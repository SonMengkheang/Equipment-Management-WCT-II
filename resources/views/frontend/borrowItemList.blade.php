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
                    @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="card card-cascade narrower">

                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img class="card-img-top" src="{{URL::to($product->image)}}"
                                         alt="Card image cap" style="width: 100%; height: 300px">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body card-body-cascade">

                                    <!-- Label -->
                                    <h5 class="pink-text pb-2 pt-1 font-weight-bold card-title text-center"><i class="fas fa-wrench"></i> {{$product->pro_name}}</h5>
                                    <!-- Title -->
                                    <h5 class="font-weight-bold card-title text-center">{{$product->pro_code}}</h5>
                                    <!-- Text -->
                                    <p class="text-center text-black-50" style="size: 50px">{{$product->pro_info}}</p>
                                    <!-- Button -->
                                    <a class="btn btn-unique text-white my-4" style="margin: 33% ; width: 100px" href="{{route('borrowItemDetail',$product->id)}}">View <i class="fas fa-eye"></i></a>

                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <br>
        </div>
    </div>
    <br><br>
@endsection
