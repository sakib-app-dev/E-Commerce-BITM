@extends('admin.master')
@section('content')

<h3 class="text text-success text-center">{{Session::get('msg')}}</h3>
<hr/>
{!!Form::open(['url'=>'manufacturer/save','method'=>'POST','class'=>'form-horizontal'])!!}
<table>
    <div class="form-group">
        <label>Manufacturer Name:</label>
        <input type="text" name="manufacturer_name" class="form-control" placeholder="Enter Manufacturer Name...">
        <span class="text-danger">
            {{$errors->has('manufacturer_name')?$errors->first('manufacturer_name'):''}}
        </span>
    </div>
    
    <div class="form-group">
        <label>Manufacturer Discription:</label>
        <textarea name="manufacturer_discription" class="form-control" placeholder="Enter blog discripsion..... "></textarea>
        <span class="text-danger">
            {{$errors->has('manufacturer_discription')?$errors->first('manufacturer_discription'):''}}
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
        <button type="submit" name="btn" class="btn btn-primary btn-block">Save Manufacturer Info</button>
    </div>
{!!Form::close()!!}
@endsection