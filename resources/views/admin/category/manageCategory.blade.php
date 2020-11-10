@extends('admin.master')
@section('content')

<!--<ul>
    @foreach($Categories as $category)
    <li>{{$category->category_name}}</li>
    <li>{{$category->discription}}</li>
    @endforeach
</ul>-->

<h2 class="text-center text-success">{{Session::get("msg")}}</h2>
<hr/>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category Discription</th>
            <th>Publication Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Categories as $category)
        <tr>
            <th>{{$category->id}}</td>
            <td>{{$category->category_name}}</td>
            <td>{{$category->category_discription}}</td>
            <td>{{$category->publication_status == 1 ? 'published' : 'unpublished'}}</td>
            <td>
                <a href="{{url('/category/edit/'.$category->id)}}" class="btn btn-success glyphicon glyphicon-edit">edit
<!--                    <span class="glyphicon glyphicon-edit"></span>-->
                </a>
                <a href="{{url('/category/delete/'.$category->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure')">Delete</a>

            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>

@endsection