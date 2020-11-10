@extends('admin.master')
@section('content')


<h2 class="text-center text-success">{{Session::get("msg")}}</h2>
<hr/>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Manufacturer Name</th>
            <th>Manufacturer Discription</th>
            <th>Publication Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Manufacturers as $manufacturer)
        <tr>
            <th>{{$manufacturer->id}}</td>
            <td>{{$manufacturer->manufacturer_name}}</td>
            <td>{{$manufacturer->manufacturer_discription}}</td>
            <td>{{$manufacturer->publication_status == 1 ? 'published' : 'unpublished'}}</td>
            <td>
                <a href="{{url('/manufacturer/edit/'.$manufacturer->id)}}" class="btn btn-success glyphicon glyphicon-edit">edit
<!--                    <span class="glyphicon glyphicon-edit"></span>-->
                </a>
                <a href="{{url('/manufacturer/delete/'.$manufacturer->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure')">Delete</a>

            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>

@endsection