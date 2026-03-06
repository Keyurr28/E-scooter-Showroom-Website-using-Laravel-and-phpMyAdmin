@extends('customerpanel.customermaster')
@section('content')

<br><br><br><br><br>
<!-- Shop Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        
<center>
        @if(session('status'))

        <h3 style="color:red">{{session('status')}}</h3>
        
        @endif
</center>
        <!-- Shop Product Start -->
        <div class="col-lg-12 col-md-12">
            <div class="row pb-3">
                
              
                @foreach($product_entry as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100 " src="image_upload/{{$item->image}}"  alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">{{$item->category}} - {{$item->product ? $item->product->productname : 'N/A'}}- {{$item->company}}</h6>
                            <div class="d-flex justify-content-center">
                                <h6>{{$item->price}} Rs</h6><h6 class="text-muted ml-2"><del></del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="/viewdetail/{{$item->id}}/{{$item->category}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <form action="/addtocart" method="POST">
                                @csrf
                                <input type="hidden" name="productid" value="{{$item->id}}">
                                <input type="hidden" name="productqty" value="1">
                                <input type="hidden" name="productcart" value="cart">
                                <input type="hidden" name="billno" value="0">
                                <input type="hidden" name="pprice" value="{{$item->price}}">
                            <button class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                        
                            </form>
                            
                        </div>
                    </div>
                </div>

                @endforeach
                
                
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
@endsection