@extends('backend.master.bmastering')
@section('product')
<div class="container">
    <h1 class="text-center text-primary py-4">Add Product</h1>
    <div class="row justify-content-center">
        <div class="col-md-6 border rounded p-5">
            <form action="" method="">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1" class="py-2">Product Name</label>
                  <input type="text" class="form-control" name="pname">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" class="py-2">Product Title</label>
                  <input type="text" class="form-control" name="ptitle">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" class="py-2">Regular Price</label>
                  <input type="number" class="form-control" name="rprice">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" class="py-2">Offer Price</label>
                  <input type="number" class="form-control" name="oprice">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="py-2">Product Image</label>
                  <input type="file" class="form-control" name="img">
                </div>
                <div class="py-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>

@endsection