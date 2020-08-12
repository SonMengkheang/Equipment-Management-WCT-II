@extends('backend.dashboardLayout')
@section('content')
    <div class="card easion-card">
        <div class="card-header text-white" style="background-color: #eb8b04">
            <div class="col-10">
                <h2>SHOW ITEM</h2>
            </div>
            <br>
            <div class="col-auto" style="margin-left: 60px">
                <a class="btn btn-success" href="{{ route('products.index') }}">Back</a>
            </div>
        </div>
        <!--Main layout-->
        <main class="mt-5 pt-4">
            <div class="container dark-grey-text mt-5">

                <!--Grid row-->
                <div class="row wow fadeIn">
                    <!-- Image -->
                    <div class="col-md-6 mb-4">
                        <img src="{{URL::to($product->image)}}" class="img-fluid" alt="">
                    </div>


                    <div class="col-md-6 mb-4">
                        <div class="row">
                            <div class="mb-4">
                                <h3><span class="badge purple mr-2">Your Class ID {{$product->class_id}}</span></h3>
                            </div>
                            <div class="mb-4">
                                <h3><span class="badge blue mr-2">New</span></h3>
                            </div>
                            <div class="mb-4">
                                <h3><span class="badge red mr-2">Top Borrow</span></h3>
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
                                <p>{{$product->pro_name}}</p>
                                <p>{{$product->pro_code}}</p>
                                <p>{{$product->pro_price}} $</p>
                                <p>{{$product->color}}</p>
                                <p>{{$product->size_type}}</p>
                                <p>{{$product->stock}}</p>
                                <p>1-1-2020;11:30:05 AM</p>
                                <p>2-1-2020;7:10:45 AM</p>
                            </div>
                        </div>
                        <p class=" font-weight-bold text-black-50 text-uppercase">Description</p>
                        <p>{{$product->pro_info}}</p>

                        <form class="d-flex justify-content-left" style="margin-left: -5px">
                            <button onclick="window.location.href({{url('dashboard/products/edit',$product->id)}}" class="btn btn-primary btn-md my-0 p">Update
                                <i class="fas fa-edit ml-1"></i>
                            </button>
                        </form>
                    </div>

                </div>
                <br><br>

            </div>
        </main>
        <!--Main layout-->
    </div>

@endsection
