@extends('backend.master.bmastering')
@section('category')
<div class="container">
    <h1 class="text-center text-primary py-4">Add Category</h1>
    <h2 class="text-success text-center">{{session()->get('notification')}}</h2>
    <div class="row justify-content-center">
        <div class="col-md-6 border rounded p-5">
            <form action="{{route('insert')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1" class="py-2">Category Name</label>
                  <input type="text" class="form-control" name="cname">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="py-2">Category Image</label>
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