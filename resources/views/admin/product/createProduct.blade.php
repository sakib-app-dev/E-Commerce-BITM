@extends('admin.master')
@section('content')

{!!Form::open(['url'=>'product/save','method'=>'POST','class'=>'form-horizontal', 'enctype'=>'multipart/form-data'])!!}
<table>
    <div class="form-group">
        <label>Product Name:</label>
        <input type="text" name="product_name" class="form-control" placeholder="Enter product Name...">
        <span class="text-danger">
            {{$errors->has('product_name')?$errors->first('product_name'):''}}
        </span>
    </div>
    <div class="form-group">
        <label>Category Name:</label>

        <select class="form-control" name="categoryID">
            <option selected="" disabled="">---Select Category Name--</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endforeach
        </select>

    </div>
    <div class="form-group">
        <label>MAnufacturer Name:</label>

        <select class="form-control" name="menufacturarID">
            <option selected="" disabled="">---Select Manufacturer Name--</option>
            @foreach($manufacturers as $manufacturer)
            <option value="{{$manufacturer->id}}">{{$manufacturer->manufacturer_name}}</option>
            @endforeach
        </select>

    </div>
    
    <div class="form-group">
        <label>Product Price:</label>
        <input type="number" name="price" class="form-control" placeholder="Enter Product price...">
        <span class="text-danger">
            {{$errors->has('price')?$errors->first('price'):''}}
        </span>
    </div>
    <div class="form-group">
        <label>Product Quantity:</label>
        <input type="number" name="quantity" class="form-control" placeholder="Enter Product Quantity...">
        <span class="text-danger">
            {{$errors->has('quantity')?$errors->first('quantity'):''}}
        </span>
    </div>
    
    <div class="form-group">
        <label>Product Short Discription:</label>
        <textarea name="category_short_discription" class="form-control" placeholder="Enter blog discripsion..... " rows="3"></textarea>
        <span class="text-danger">
            {{$errors->has('category_short_discription')?$errors->first('category_short_discription'):''}}
        </span>
    </div>
    <div class="form-group">
        <label>Product Long Discription:</label>
        <textarea name="category_long_discription" class="form-control" id="mytextarea" placeholder="Enter blog discripsion..... " rows="8"></textarea>
        <span class="text-danger">
            {{$errors->has('category_long_discription')?$errors->first('category_long_discription'):''}}
        </span>
    </div>
    
    <div class="form-group">
        <label>Product Image:</label>
        <input type="file" name="image"  accept="image/*">
        <span class="text-danger">
            {{$errors->has('image')?$errors->first('image'):''}}
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
        <button type="submit" name="btn" class="btn btn-success btn-block">Save Product Info</button>
    </div>
{!!Form::close()!!}
@endsection