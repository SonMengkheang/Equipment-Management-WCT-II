@extends('backend.dashboardLayout')
@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Item</h2>
            </div>
            <br>

            <div class="float-right">
                <a class="btn btn-success" href="{{ route('products.index') }}">Back</a>
            </div>
        </div>
    </div>

    <form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('patch')}}

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="pro_name" class="form-control" value="{{$product->pro_name}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Code</label>
            <input type="text" name="pro_code" class="form-control" value="{{$product->pro_code}}">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="pro_price" class="form-control" value="{{$product->pro_price}}">
        </div>
        <div class="form-group">
            <label>Amount</label>
            <input type="text" name="stock" class="form-control" value="{{$product->stock}}">
        </div>

        <div class="form-group">
            <label>Color</label>
            <input type="text" name="color" class="form-control" value="{{$product->color}}">
        </div>

        <div class="form-group">
            <label>Size/Type</label>
            <input type="text" name="size_type" class="form-control" value="{{$product->size_type}}">
        </div>

        <div class="form-group">
            <label>Select Class </label>
            <select name="class_id" class="form-control">
                <option selected value="{{ $product->class_id }}">{{ $product->className }}</option>
                @foreach($classCategories as $id => $classCategoryName)
                    @if($product->class_id !== $id)
                        <option value="{{ $id }}">{{$classCategoryName}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Detail</label>
            <textarea name="pro_info" class="form-control" rows="3" style="height: 150px">{{$product->pro_info}}</textarea>
        </div>

        <div class="form-group">
            <label>Old Image</label>
            <img src="{{URL::to($product->image)}}" height="70px" width="70px" class="rounded-circle">
            <input type="hidden" name="old_image" value="{{$product->image}}">
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
