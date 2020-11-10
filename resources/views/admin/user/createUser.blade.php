@extends('admin.master')
@section('content')

{!!Form::open(['url'=>'user/save','method'=>'POST','class'=>'form-horizontal'])!!}
<table>
    <div class="form-group">
        <label>User Name:</label>
        <input type="text" name="user_name" class="form-control" placeholder="Enter user Name...">
        <span class="text-danger">
            {{$errors->has('user_name')?$errors->first('user_name'):''}}
        </span>
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email address...">
        <span class="text-danger">
            {{$errors->has('email')?$errors->first('email'):''}}
        </span>
    </div>
    <div class="form-group">
        <label>Phone No:</label>
        <input type="number" name="phn_num" class="form-control" placeholder="Enter Phone Number...">
        <span class="text-danger">
            {{$errors->has('phn_num')?$errors->first('phn_num'):''}}
        </span>
    </div>
    
    <div class="form-group">
        <label>Address:</label>
        <textarea name="address" class="form-control" placeholder="Enter user Address..... "></textarea>
        <span class="text-danger">
            {{$errors->has('address')?$errors->first('address'):''}}
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
        <button type="submit" name="btn" class="btn btn-success btn-block">Save User Info</button>
    </div>
{!!Form::close()!!}
@endsection