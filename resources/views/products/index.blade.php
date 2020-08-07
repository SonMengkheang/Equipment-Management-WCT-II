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
                        <h1 class="font-weight-bold"> ITEM LISTING </h1>
                    </div>
                    <br>
                    <div class="col-auto">
                        <a class="btn btn-success" href="{{ route('products.create') }}">Add New Product</a>
                    </div>
                </div>
            <br>
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif

            <div class="card-body card-body-with-white-table justify-content-end" style="width: 1200px" >
                <table class="table table-striped table-responsive-md btn-table text-center table-wrapper-scroll-y my-custom-scrollbar justify-content-center" >
                <tr class="font-weight-bold">
                    <th width="100px">ID</th>
                    <th width="100px">IMAGE</th>
                    <th width="150px">ITEM NAME</th>
                    <th width="100px">ITEM CODE</th>
                    <th width="100px">CLASS</th>
                    <th width="250px">DETAILS</th>
                    <th width="200px">ACTION</th>
                </tr>
                @if(Auth::user()->id)
                @foreach($product as $pro)
                <tr>
                    <td>{{$pro->id}}</td>
                    <td><img src="{{URL::to($pro->image)}}" height="80px" width="80px" class="rounded-circle"></td>
                    <td>{{$pro->pro_name}}</td>
                    <td>{{$pro->pro_code}}</td>
                    <td>{{$pro->class_id}}</td>
                    <td>{{$pro->pro_info}}</td>

                    <td>
                        <button onclick="window.location.href='{{url('dashboard/products/show',$pro->id)}}';" class="btn btn-info"><i class="fas fa-eye"></i></button>
                        <button onclick="window.location.href='{{url('dashboard/products/edit',$pro->id)}}';" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
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
                                        <button onclick="window.location.href='{{url('dashboard/products/delete',$pro->id)}}';" type="submit" class="btn btn-primary">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>

                </tr>
                @endforeach
                    @endif
            </table>
            </div>
        </div>
        </div>
    </div>
@endsection
