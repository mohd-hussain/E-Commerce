@extends('layouts.master')

@section('title')
    Dashboard :All Categories    
@endsection


@section('content')
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Cetegory</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="/store-category" method="POST" > 
          
              {{ csrf_field() }}
              <div class="modal-body">
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Category Name:</label>
                    <input type="text" name="categoryName" class="form-control" id="recipient-name">
                  </div>
                  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </form>
        </div>
      </div>
  </div>

            <!-- Delete Modal -->  

<!-- <div class="modal fade" id="deletemodelpop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="delete_modal_Form" method="POST">

          {{ csrf_field() }}
          {{ method_field('DELETE') }}

        <div class="modal-body">
            <input type="hidden" id="delete_aboutus_id">
            <h4>Are You Sure..? you want to delete it..?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Yes.delete it</button>
        </div>
      </form>
    </div>
  </div>
</div> -->

<div class="modal fade" id="deletemodelpop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="delete_modal_Form" method="POST">

          {{ csrf_field() }}
          {{ method_field('DELETE') }}

        <div class="modal-body">
            <input type="hidden" id="delete_aboutus_id">
            <h4>Are You Sure..? you want to delete it..?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Yes.delete it</button>
        </div>
      </form>
    </div>
  </div>
</div>


       <!-- End Delete Modal --> 

  <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title "> Product Categories
              <button type="button" class="btn btn-primary float-right " data-toggle="modal" data-target="#exampleModal" >Add</button>
              </h4>
            </div>

           @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('danger'))
                <div class="alert alert-danger" role="alert">
                    {{ session('danger') }}
                </div>
            @endif

            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="datatable">
                  <thead class=" text-primary">
                        <th>Id</th>
                        <th>Category Name</th>
                        
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        
                        <td> 
                            <a href="/edit-category/{{$category->id}}" class="btn btn-success">Edit</a>
                        </td>
                        <td> 
                            <!-- <a href="javascript:void(0)" class="btn btn-danger deletebtn"  data-toggle="modal" data-target="#deletemodelpop">Delete</a> -->
                            <form action="/delete-category/{{$category->id}}" method="POST">

                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        
                                      </form>                                   
                                    </td>
                        </td>
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
   <script>
      $(document).ready( function () {
        $('#datatable').DataTable();

            $('#datatable').on('click','.deletebtn',function(){
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                  return $(this).text();
                }).get();

                $('#delete_aboutus_id').val(data[0]);

                $('#delete_modal_Form').attr('action','delete-category/'+data[0]);

                $('#delete_modalpop').modal('show');
            });

        });
   </script> 

@endsection