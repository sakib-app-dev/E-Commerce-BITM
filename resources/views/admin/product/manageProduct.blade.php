@extends('admin.master')
@section('content')
<h2 class="text-center text-success">{{Session::get("msg")}}</h2>
<hr/>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Category Name</th>
            <th>MAnufacturer Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Publication Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Products as $productInfo)
        <tr>
            <th>{{$productInfo->id}}</td>
            <td>{{$productInfo->product_name}}</td>
            <td>{{$productInfo->category_name}}</td>
            <td>{{$productInfo->manufacturer_name}}</td>
            <td>{{$productInfo->price}}</td>
            <td>{{$productInfo->quantity}}</td>
            <td>{{$productInfo->publication_status == 1 ? 'published' : 'unpublished'}}</td>
            <td>
                <a href="{{url('/product/view/'.$productInfo->id)}}" class="btn btn-info">View</a>
                <a href="{{url('/product/edit/'.$productInfo->id)}}" class="btn btn-success glyphicon glyphicon-edit">edit
<!--                    <span class="glyphicon glyphicon-edit"></span>-->
                </a>
                <a href="{{url('/product/delete/'.$productInfo->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure')">Delete</a>

            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>
@endsection