@extends('layouts.master')

@section('title')
    Dashboard    
@endsection


@section('content')
  
  <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Dashboard</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                        <th>Users</th>
                        <th>Categories</th>
                        <th>Products</th>                       
                  </thead>
                  <tbody>
                    <tr>
                        <td>{{ $allUsers->count()}} Users</td>
                        <td>{{ $allCategories->count()}} Categories</td>
                        <td>{{ $allProducts->count()}} Products</td>                      
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Users</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                        <th>ID</th>
                        <th>User Name</th>
                                               
                  </thead>
                  <tbody>
                    
                        @foreach($allUsers as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user-> name }}</td>
                        </tr>
                        @endforeach
                                              
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Products</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Category</th>
                                               
                  </thead>
                  <tbody>
                    
                        @foreach($allProducts as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product-> name }}</td>
                            <td>{{ $product->category_id}}</td>
                        </tr>
                        @endforeach
                                              
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

         <div class="col">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Categories</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                        <th>ID</th>
                        <th>Category Name</th>
                                               
                  </thead>
                  <tbody>
                    
                        @foreach($allCategories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category-> name }}</td>
                        </tr>
                        @endforeach
                                              
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


        
      
      
      </div>

@endsection

@section('script')
    
@endsection