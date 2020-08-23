@extends('Main.layouts.base')

@section('content')

 <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Cart Products</h2>
              <p>Home <span>-</span>Cart Products</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->
  @include('Main.layouts.message') 
  <!--================Cart Area =================-->
  <section class="cart_area padding_top">
    <div class="container">
      <div class="cart_inner">
      
        <div class="table-responsive">
          <table id="" class="table">
            <thead>
              <tr>
                <th scope="col">Product Image</th> 
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th></th>
                

              </tr>
            </thead>
            <tbody>

            <?php $total = 0 ?>
            
            
            @foreach($items as $item)

              <?php $total += $item->price;  ?>               
                
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="/storage/product_images/{{$item->product_image}}" alt="" height="100px"/>
                      
                      
                    </div>
                  </td> 
                  <td>
                    <div class="media-body">
                      <p>{{ $item->detail }}</p>
                     

                    </div>
                  </div>
                </td>
                <td>
                  <h5>{{ $item->price }}</h5>
                  
                </td>
                <td >
                  <div class="product_count">
                    <span class="input-number-decrement"> <i class="ti-angle-down"></i></span> 
                     <input class="input-number"  value="" min="0" max="10" class="form-control quantity"> 
                    <span class="input-number-increment"> <i class="ti-angle-up"></i></span>
                  </div> 
                 </td>
                
                <td> 
                  <h5>{{ $item->price  }}</h5>
                  

                </td>
               
                <td class="actions" data-th="">
                       <form action="/updateCart/{{$item->id}}" method="post">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-info btn-sm " data-id=""><i class="fa fa-refresh"></i></button>
                        </form>
                        
                        <form action="/deleteFromCart/{{$item->id}}" method="post">
                            @csrf
                            @method('DELETE')
                           
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                        </form>

                    </td>
                
              </tr>

              @endforeach
        

              <tr>
                <td></td>
                <td></td>
                <td></td>

                <td>
                  <h5>Subtotal :</h5>
                </td>
                <td>
                  <h5>{{ $total }}</h5>
                </td>
              </tr> 

            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="index.html">Continue Shopping</a>
            <a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a>
          </div>
             
        </div>
      </div>
  </section> 
  <!--================End Cart Area =================-->


@endsection

<!-- @section('js')
            <script type="text/javascript">
            
            $(".update-cart").click(function (e) {
                e.preventDefault();

                var ele = $(this);

                $.ajax({
                    url: '{{ url('update-cart') }}',
                    method: "patch",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            });

            $(".remove-from-cart").click(function (e) {
                e.preventDefault();

                var ele = $(this);

                if(confirm("Are you sure")) {
                    $.ajax({
                        url: '{{ url('remove-from-cart') }}',
                        method: "DELETE",
                        data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                        success: function (response) {
                            window.location.reload();
                        }
                    });
                }
            });

            </script>
@endsection -->
