@extends('backend.dashboardLayout')

    <style>
        .profile-img {

            margin-top: 0;
            margin-left: 15%;

        }

        .profile-img img {

            width: 160px;
            height: 160px;
        }

        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }
        .profile-head h5{
            color: #333;
        }
        .profile-head h6{
            color: #0062cc;
        }
        .profile-edit-btn{
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
        }
        .proile-rating{
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }
        .proile-rating span{
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }
        .profile-head .nav-tabs{
            margin-bottom:5%;
        }
        .profile-head .nav-tabs .nav-link{
            font-weight:600;
            border: none;
        }
        .profile-head .nav-tabs .nav-link.active{
            border: none;
            border-bottom:2px solid #0062cc;
        }
        .profile-work{
            padding: 14%;
            margin-top: -15%;
        }
        .profile-work p{
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }
        .profile-work a{
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }
        .profile-work ul{
            list-style: none;
        }
        .profile-tab label{
            font-weight: 600;
        }
        .profile-tab p{
            font-weight: 600;
            color: #0062cc;
        }
    </style>


@section('content')
    <br>
        <div class="row">
            @slot('title')
                <h1 class="dash-title">User Detail Profile</h1>
            @endslot
            <div class="col-lg-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-user-secret"></i>
                        </div>
                        <div class="easion-card-title">User Detail Profile</div>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-img">
                                    <img class="rounded-circle" src="{{url('https://image.flaticon.com/icons/png/512/219/219970.png')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="profile-head">
                                    <h5> Mengkheang </h5>
                                    <h6> mengkheangson21@gmail.com </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>

                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true"> About </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#accinfo" role="tab" aria-controls="accinfo" aria-selected="false"> Account Info </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-work">
                                    <p> Social Link </p>
                                    <a href=""> FaceBook</a><br />
                                    <a href=""> Instagram </a><br />
                                    <a href=""> Line </a>
                                    <a href=""> Telegram </a>

                                    <p> Career </p>
                                    <a href=""> Web Designer </a><br />
                                    <a href=""> Web Developer </a><br />

                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content profile-tab" id="myTabContent">
                                    <div class="tab-pane fade show active" id="about" role="tabpanel"
                                         aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> User ID </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> + 8945344553 </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> Username </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Mengkheang</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>mengkheangson21@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> Role </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> Admin </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Full Stack Developer</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Location</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> Phnom Penh, Cambodia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="accinfo" role="tabpanel"
                                         aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> Account Creation </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10-12-2020</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> Account Updating </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>11-12-2020</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> Last Sign out </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>12:00 PM -12-12-2020</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> Current Login In </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> 2020-07-10 16:04:12 AM </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> Status </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> Offline</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

