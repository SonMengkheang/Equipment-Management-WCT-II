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
            <div class="card-header" style="background-color: #eb8b04">
                <div class="col-10 ">
                    <h1 class="font-weight-bold text-white"> CLASS LISTING </h1>
                </div>

                <div class="col-auto">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createClass" data-whatever="@mdo">Create New Class</button>
                    <div class="modal fade card-body card-body-with-dark-table" id="createClass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create New Class</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <form action="{{ route('classes.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-form-label">CLASS NAME</label>
                                            <input type="text" name="className" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">CLASS CODE</label>
                                            <input type="text" name="classCode" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">ROOM</label>
                                            <input type="text" name="room" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">SECTION</label>
                                            <input type="text" name="section" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="user_id" class="form-control" value="{{ Auth::user()->id }}">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <div class="card-body card-body-with-white-table justify-content-end" style="width: 1200px">
                <table class="table table-dark table-in-card text-center table-wrapper-scroll-y my-custom-scrollbar">
                    <thead>
                    <tr>
                        <th scope="col" width="100px">ID</th>
                        <th scope="col" width="400px">CLASS NAME</th>
                        <th scope="col" width="200px" >CLASS CODE</th>
                        <th scope="col" width="250px">ROOM</th>
                        <th scope="col" width="200px">SECTION</th>
                        <th scope="col" width="300px">ACTION</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach($class as $classes)
                    <tr>
                        <th scope="row">{{$classes->id}}</th>
                        <td>{{$classes->className}}</td>
                        <td>{{$classes->classCode}}</td>
                        <td>{{$classes->room}}</td>
                        <td>{{$classes->section}}</td>
                        <td>

                            <button
                                type="button" class="btn btn-primary"
                                data-toggle="modal"
                                data-target="#editClass{{$classes->id}}"
                                data-whatever="@mdo">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <div class="modal fade card-body card-body-with-dark-table"
                                 id="editClass{{$classes->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content text-black-50">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Current Class</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-left">
                                            <form action="{{url('dashboard/classes/update',$classes->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{method_field('patch')}}
                                                <div class="form-group">
                                                    <label class="col-form-label">CLASS NAME</label>
                                                    <input type="text" name="className" class="form-control" value="{{$classes->className}}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">CLASS CODE</label>
                                                    <input type="text" name="classCode" class="form-control" value="{{$classes->classCode}}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">ROOM</label>
                                                    <input type="text" name="room" class="form-control" value="{{$classes->room}}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">SECTION</label>
                                                    <input type="text" name="section" class="form-control" value="{{$classes->section}}">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete" data-whatever="@mdo">
                                <i class="fas fa-trash"></i>
                            </button>
                            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content text-black-50">
                                        <div class="modal-header">
                                            <h5 class="modal-title " id="deleteLabel">You'll be lost your data when you clicked delete!!!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Do you want to delete?</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                            <form id="form-delete" method="post" action="{{route('classes.destroy', $classes->id)}}">
                                                @csrf
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-primary">Delete</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
