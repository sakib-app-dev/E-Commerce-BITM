@extends('admin.master')
@section('content')

{!!Form::open(['url'=>'category/save','method'=>'POST','class'=>'form-horizontal'])!!}
<table>
    <div class="form-group">
        <label>Category Name:</label>
        <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name...">
        <span class="text-danger">
            {{$errors->has('category_name')?$errors->first('category_name'):''}}
        </span>
    </div>
    
    <div class="form-group">
        <label>Category Discription:</label>
        <textarea name="category_discription" class="form-control" placeholder="Enter blog discripsion..... "></textarea>
        <span class="text-danger">
            {{$errors->has('category_discription')?$errors->first('category_discription'):''}}
        </span>
    </div>
    <div class="form-group">
        <label>Publication Status:</label>

        <select class="form-control" name="publication_status">
            <option selected="" disabled="">---Select Publication Status--</option>
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>

    </div>

    <div class="form-group">
        <button type="submit" name="btn" class="btn btn-success btn-block">Save Category Info</button>
    </div>
{!!Form::close()!!}
@endsection