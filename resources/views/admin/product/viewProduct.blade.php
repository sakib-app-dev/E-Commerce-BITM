@extends('admin.master')
@section('content')
<table class="table table-bordered">
    <tr>
        <th>Product Id</th>
        <td>{{$ProductsById->id}}</td>
    </tr>
    <tr>
        <th>Product Name</th>
        <td>{{$ProductsById->product_name}}</td>
    </tr>
    <tr>
        <th>Category Name</th>
        <td>{{$ProductsById->category_name}}</td>
    </tr>
    <tr>
        <th>Manufacturer Name</th>
        <td>{{$ProductsById->manufacturer_name}}</td>
    </tr>
    <tr>
        <th>Product Price</th>
        <td>{{$ProductsById->price}}</td>
    </tr>
    <tr>
        <th>Product quantity</th>
        <td>{{$ProductsById->quantity}}</td>
    </tr>
    <tr>
        <th>Product category_short_discription</th>
        <td>{{$ProductsById->category_short_discription }}</td>
    </tr>
    <tr>
        <th>Product category_long_discription</th>
        <td>{!!$ProductsById->category_long_discription!!}</td>
    </tr>
    <tr>
        <th>Product image</th>
        <td><img src="{{asset('/'.$ProductsById->image)}}" alt="{{$ProductsById->product_name}}" height="200px" width="200px"></td>
    </tr>
    <tr>
        <th>Publication Status</th>
        <td>{{$ProductsById->publication_status==1?'published':'unpublished'}}</td>
    </tr>
</table>
@endsection