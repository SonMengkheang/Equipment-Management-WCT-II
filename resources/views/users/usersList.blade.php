@extends('backend.dashboardLayout')
    <style>
        .my-custom-scrollbar {
            position: relative;
            height: 400px;
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
                        <h1 class="font-weight-bold"> USER LISTING </h1>
                    </div>
                </div>
                <br>
                <div class="card-body card-body-with-white-table justify-content-end" style="width: 1200px">
                    <table class="table table-dark table-striped table-in-card text-center table-wrapper-scroll-y my-custom-scrollbar justify-content-center">
                        <thead>
                        <tr class="font-weight-bold ">
                            <th scope="col" width="50px">ID</th>
                            <th scope="col" width="75">PROFILE</th>
                            <th scope="col" width="120px">USER NAME</th>
                            <th scope="col" width="50px" >ROLE</th>
                            <th scope="col" width="100px">EMAIL</th>
                            <th scope="col" width="200px">CLASS</th>
                            <th scope="col" width="100px">POSITION</th>
                            <th scope="col" width="180px">ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <th><img class="rounded-circle" width="75px" height="75px" src="{{url('https://image.flaticon.com/icons/png/512/219/219970.png')}}"></th>
                            <td>Kimi Noto</td>
                            <td>user</td>
                            <td>kiminoto@gmail.com</td>
                            <td>Information Technology Engineering Year 3</td>
                            <td>Web Developer</td>
                            <td>
                                <button onclick="window.location.href='{{url('/dashboard/users/profile')}}';" class="btn btn-info"><i class="fas fa-eye"></i></button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-trash"></i>
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content text-black-50">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">You'll be lost your data when you clicked delete!!!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Do you want to delete?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                <button onclick="window.location.href='';" type="submit" class="btn btn-primary">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <th><img class="rounded-circle" width="75px" height="75px" src="{{url('https://image.flaticon.com/icons/png/512/219/219970.png')}}"></th>
                            <td>Kimi Noto</td>
                            <td>user</td>
                            <td>kiminoto@gmail.com</td>
                            <td>Information Technology Engineering Year 3</td>
                            <td>Web Developer</td>
                            <td>
                                <button onclick="window.location.href='{{url('/dashboard/users/profile')}}';" class="btn btn-info"><i class="fas fa-eye"></i></button>
                                <button onclick="window.location.href=''; return confirm('Are you sure ?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <th><img class="rounded-circle" width="75px" height="75px" src="{{url('https://image.flaticon.com/icons/png/512/219/219970.png')}}"></th>
                            <td>Kimi Noto</td>
                            <td>user</td>
                            <td>kiminoto@gmail.com</td>
                            <td>Information Technology Engineering Year 3</td>
                            <td>Web Developer</td>
                            <td>
                                <button onclick="window.location.href='{{url('/dashboard/users/profile')}}';" class="btn btn-info"><i class="fas fa-eye"></i></button>
                                <button onclick="window.location.href=''; return confirm('Are you sure ?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <th><img class="rounded-circle" width="75px" height="75px" src="{{url('https://image.flaticon.com/icons/png/512/219/219970.png')}}"></th>
                            <td>Kimi Noto</td>
                            <td>user</td>
                            <td>kiminoto@gmail.com</td>
                            <td>Information Technology Engineering Year 3</td>
                            <td>Web Developer</td>
                            <td>
                                <button onclick="window.location.href='{{url('/dashboard/users/profile')}}';" class="btn btn-info"><i class="fas fa-eye"></i></button>
                                <button onclick="window.location.href=''; return confirm('Are you sure ?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <th><img class="rounded-circle" width="75px" height="75px" src="{{url('https://image.flaticon.com/icons/png/512/219/219970.png')}}"></th>
                            <td>Kimi Noto</td>
                            <td>user</td>
                            <td>kiminoto@gmail.com</td>
                            <td>Information Technology Engineering Year 3</td>
                            <td>Web Developer</td>
                            <td>
                                <button onclick="window.location.href='{{url('/dashboard/users/profile')}}';" class="btn btn-info"><i class="fas fa-eye"></i></button>
                                <button onclick="window.location.href=''; return confirm('Are you sure ?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <th><img class="rounded-circle" width="75px" height="75px" src="{{url('https://image.flaticon.com/icons/png/512/219/219970.png')}}"></th>
                            <td>Kimi Noto</td>
                            <td>user</td>
                            <td>kiminoto@gmail.com</td>
                            <td>Information Technology Engineering Year 3</td>
                            <td>Web Developer</td>
                            <td>
                                <button onclick="window.location.href='{{url('/dashboard/users/profile')}}';" class="btn btn-info"><i class="fas fa-eye"></i></button>
                                <button onclick="window.location.href=''; return confirm('Are you sure ?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
