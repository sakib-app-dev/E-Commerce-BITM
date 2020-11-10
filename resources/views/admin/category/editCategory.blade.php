@extends('admin.master')
@section('content')
<h2 class="text-center text-success">{{Session::get("msg")}}</h2>
<hr/>
{!!Form::open(['url'=>'category/update','method'=>'POST','class'=>'form-horizontal','name'=>'editCategoryForm'])!!}
<!--Select (publication er jonno) JS korte hba tai form e Name dite hoyse-->
<table>
    <div class="form-group">
        <label>Category Name:</label>
        <input type="hidden" name="id" value="{{$CategoryById->id}}" class="form-control"> 
        <input type="text" name="category_name" value="{{$CategoryById->category_name}}" class="form-control" placeholder="Enter Category Name..."> 
    </div>
    
    <div class="form-group">
        <label>Category Discription:</label>
        <textarea name="category_discription" class="form-control" placeholder="Enter blog discripsion..... ">{{$CategoryById->category_discription}}</textarea> 
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
        <button type="submit" name="btn" class="btn btn-success btn-block">Update Category Info</button>
    </div>
{!!Form::close()!!}

<script>
    document.forms['editCategoryForm'].elements['publication_status'].value={{$CategoryById->publication_status}};
</script>

@endsection