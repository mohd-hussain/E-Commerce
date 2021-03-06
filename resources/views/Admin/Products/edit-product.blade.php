@extends('layouts.master')

@section('title')
    Dashboard:Edit Product Details 
@endsection


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Product Details .</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            <form action="/update-product/{{ $product->id }}" method="POST" enctype="multipart/form-data">

                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}

                                    <div class="form-group">
                                            <label>Product Name:</label>
                                            <input type="text" name="name" value="{{$product->name}}" class="form-control" >
                                    </div>

                                    <div class="form-group">
                                            <label>Product Detail:</label>
                                            <input type="text" name="detail" value="{{$product->detail}}" class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label>Price:</label>
                                        <input type="integer" name="price" class="form-control" value="{{$product->price}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Stock:</label>
                                        <input type="integer" name="stock" class="form-control" value="{{$product->stock}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Discount:</label>
                                        <input type="integer" name="discount" class="form-control" value="{{$product->discount}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id" class="col-form-label">Category Id:</label>
                                        <!-- <input type="integer" name="category_id" class="form-control" id="category_id" value="{{ $product->category_id }}"> -->
                                        <select name="category_id" class="form-control" value="{{ $product->category_id }}">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Image:</label>
                                        <input type="file" name="product_image" class="form-control" value="{{$product->product_image}}">
                                    </div>
    
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="/products-all" class="btn btn-danger">Cancel</a>
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