@extends('layouts.master')

@section('title')
    Dashboard:Edit About Us 
@endsection


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Category</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            <form action="/update-category/{{ $category->id }}" method="POST" enctype="multipart/form-data">

                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}

                                    <div class="form-group">
                                            <label>Id</label>
                                            <input type="integer" name="categoryId" value="{{$category->id}}" class="form-control" >
                                    </div>

                                    <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="categoryName" value="{{$category->name}}" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" name="description" value="{{$category->description}}" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="category_image" value="{{$category->category_image}}" class="form-control-file" >
                                    </div>

                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="/categories-all" class="btn btn-danger">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    
@endsection