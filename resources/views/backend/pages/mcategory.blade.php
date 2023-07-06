@extends('backend.master.bmastering')
@section('mcategory')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center text-success py-3">Show all Category</h1>
            <table class="table table-bordered text-center table-primary">
                <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Category Image</th>
                </tr>
                @foreach ($category as $cat)
                    <tr>
                        <td>{{$cat['id']}}</td>
                        <td>{{$cat['cname']}}</td>
                        <td>{{$cat['img']}}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>
@endsection