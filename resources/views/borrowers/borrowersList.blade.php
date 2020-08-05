@extends('backend.dashboardLayout')
    <style>
        .my-custom-scrollbar {
            position: relative;
            height: 395px;
            overflow: auto;
        }
        .table-wrapper-scroll-y {
            display: block;
        }
    </style>
@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="card easion-card">
                <div class="card-header text-white" style="background-color: #eb8b04">
                    <div class="col-10">
                        <h1 class="font-weight-bold"> BORROWER LISTING </h1>
                    </div>
                </div>
                <br>
                <div class="card-body card-body-with-white-table justify-content-end" style="width: 1200px">
                    <table class="table table-dark table-striped table-in-card text-center table-wrapper-scroll-y my-custom-scrollbar justify-content-center">
                        <thead>
                        <tr class="font-weight-bold ">
                            <th scope="col" width="100px">ID</th>
                            <th scope="col" width="90">PROFILE</th>
                            <th scope="col" width="200px">USER NAME</th>
                            <th scope="col" width="200px">USER EMAIL</th>
                            <th scope="col" width="150px" >ROLE</th>
                            <th scope="col" width="150px">POSITION</th>
                            <th scope="col" width="200px">ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td><img class="rounded-circle" width="80px" height="80px" src="{{url('https://image.flaticon.com/icons/png/512/219/219970.png')}}"></td>
                                <td>Kimi Noto</td>
                                <td>kiminoto@gmail.com</td>
                                <td>user</td>
                                <td>Web Developer</td>

                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Return</button>
                                    <div class="modal fade card-body card-body-with-dark-table text-black-50" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">We're processing your return... </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <br>
                                                    <div class="container">
                                                     <div class="row">
                                                        <div class="col-4">
                                                            <!-- Card Regular -->
                                                            <div class="card card-cascade">
                                                                <!-- Card image -->
                                                                <div class="avatar mx-auto white">
                                                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg"
                                                                         class="img-fluid rounded-circle z-depth-1-half" style="margin-top: 40px">
                                                                    <a>
                                                                        <div class="mask rgba-white-slight"></div>
                                                                    </a>
                                                                </div>

                                                                <!-- Card content -->
                                                                <div class="card-body card-body-cascade text-center">

                                                                    <!-- Title -->
                                                                    <h4 class="card-title"><strong>Billy Coleman</strong></h4>
                                                                    <!-- Subtitle -->
                                                                    <h6 class="font-weight-bold indigo-text py-2">Web developer</h6>
                                                                    <!-- Text -->
                                                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex, recusandae.
                                                                        Facere modi sunt, quod quibusdam.
                                                                    </p>
                                                                    <!--Facebook-->
                                                                    <a class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
                                                                    <!--Dribbble-->
                                                                    <a class="btn-floating btn-lg btn-dribbble" type="button" role="button"><i class="fab fa-dribbble"></i></a>
                                                                    <!--Linkedin-->
                                                                    <a class="btn-floating btn-lg btn-li" type="button" role="button"><i class="fab fa-linkedin-in"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="card easion-card">
                                                                <div class="card-header text-white" style="background-color: #eb8b04">
                                                                    <div class="col-10">
                                                                        <h1 class="font-weight-bold"> ITEM HAVE BORROWED </h1>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            <div class="card-body card-body-with-white-table">
                                                                <table class="table table-striped table-responsive-md btn-table text-center table-wrapper-scroll-y my-custom-scrollbar justify-content-center">
                                                                    <thead>
                                                                    <tr class="font-weight-bold text-black-50">
                                                                        <th scope="col" width="50px">ID</th>
                                                                        <th scope="col" width="75">IMAGE</th>
                                                                        <th scope="col" width="100px">NAME</th>
                                                                        <th scope="col" width="150px">  CODE</th>
                                                                        <th scope="col" width="200px">DATED</th>
                                                                        <th scope="col" width="50px" >QUANTITY</th>
                                                                        <th scope="col" width="100px">RETURN</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td scope="row">1</td>
                                                                            <td><img class="rounded-circle" width="75px" height="75px" src="{{url('https://image.flaticon.com/icons/png/512/219/219970.png')}}"></td>
                                                                            <td>Pencil</td>
                                                                            <td>p-005fx</td>
                                                                            <td>12-7-2020 ; 11:20:5 AM</td>
                                                                            <td>2</td>
                                                                            <td>
                                                                                <button onclick="window.location.href('');" type="button" class="btn btn-success"><i class="fas fa-arrow-circle-right"></i></button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">1</td>
                                                                            <td><img class="rounded-circle" width="75px" height="75px" src="{{url('https://image.flaticon.com/icons/png/512/219/219970.png')}}"></td>
                                                                            <td>Pencil</td>
                                                                            <td>p-005fx</td>
                                                                            <td>12-7-2020 ; 11:20:5 AM</td>
                                                                            <td>2</td>
                                                                            <td>
                                                                                <button onclick="window.location.href('');" type="button" class="btn btn-success"><i class="fas fa-arrow-circle-right"></i></button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">1</td>
                                                                            <td><img class="rounded-circle" width="75px" height="75px" src="{{url('https://image.flaticon.com/icons/png/512/219/219970.png')}}"></td>
                                                                            <td>Pencil</td>
                                                                            <td>p-005fx</td>
                                                                            <td>12-7-2020 ; 11:20:5 AM</td>
                                                                            <td>2</td>
                                                                            <td>
                                                                                <button onclick="window.location.href('');" type="button" class="btn btn-success"><i class="fas fa-arrow-circle-right"></i></button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">1</td>
                                                                            <td><img class="rounded-circle" width="75px" height="75px" src="{{url('https://image.flaticon.com/icons/png/512/219/219970.png')}}"></td>
                                                                            <td>Pencil</td>
                                                                            <td>p-005fx</td>
                                                                            <td>12-7-2020 ; 11:20:5 AM</td>
                                                                            <td>2</td>
                                                                            <td>
                                                                                <button onclick="window.location.href('');" type="button" class="btn btn-success"><i class="fas fa-arrow-circle-right"></i></button>
                                                                            </td>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
