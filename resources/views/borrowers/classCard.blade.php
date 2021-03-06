@extends('backend.dashboardLayout')

@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="card easion-card">
                <div class="card-header text-white" style="background-color: #eb8b04">
                    <div class="col-10">
                        <h1 class="font-weight-bold"> CURRENT CLASS </h1>
                    </div>
                </div>
            <br><br>
            <div class="container">
                @foreach($user as $class)
                    <div class="col-md-12 mb-4">
                        <div class="card gradient-card">
                            <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
                                <a href="{{url('dashboard/borrowerList')}}">
                                    <div class="text-white d-flex h-100 mask aqua-gradient-rgba">
                                        <div class="first-content align-self-center p-3">
                                            <h3 class="card-title">{{$class->className}}</h3>
                                            <p class="lead mb-0">{{$class->room}} by {{auth()->user()->name}}</p>
                                        </div>
                                        <div class="second-content  align-self-center mx-auto text-center">
                                            <i class="fas fa-chart-line fa-3x"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Data -->
                            <div class="third-content  ml-auto mr-4 mb-2">
                                <p class="text-uppercase text-muted text-right">Current Borrowing</p>
                                <h4 class="font-weight-bold float-right">12 people have been borrowed</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
                <br>
            </div>
        </div>
    </div>

@endsection
