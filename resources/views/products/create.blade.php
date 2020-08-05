@extends('backend.dashboardLayout')
@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Add New Item</h2>
            </div>
            <br>

            <div class="float-right">
                <a class="btn btn-success" href="{{ route('products.index') }}">Back</a>
            </div>
        </div>
    </div>

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="pro_name" class="form-control" placeholder="Item Name...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Code</label>
            <input type="text" name="pro_code" class="form-control" placeholder="Item Code...">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="pro_price" class="form-control" placeholder="Item Price...">
        </div>
        <div class="form-group">
            <label>Amount</label>
            <input type="text" name="stock" class="form-control" placeholder="Item Amount...">
        </div>

        <div class="form-group">
            <label>Color</label>
            <input type="text" name="color" class="form-control" placeholder="Item Color...">
        </div>

        <div class="form-group">
            <label>Size/Type</label>
            <input type="text" name="size_type" class="form-control" placeholder="Item Size/Type...">
        </div>

        <div class="form-group">
            <label>Department</label>
            <select name="department_id" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>

        <div class="form-group">
            <label>Detail</label>
            <textarea name="pro_info" class="form-control" rows="3" style="height: 150px"></textarea>
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
