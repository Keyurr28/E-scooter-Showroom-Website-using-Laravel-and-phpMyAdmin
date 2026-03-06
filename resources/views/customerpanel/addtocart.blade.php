@extends('customerpanel.customermaster')
@section('content')
<br><br>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="adminindex">Home</a></li>
             
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <center>
    @if(session('status'))

    <h3 style="color:red">{{session('status')}}</h3>
    
    @endif 
    
</center>
<div class="container">
<h1 class="text-center">Add To cart</h1>
<div class="row">

    <table class="table table-hover">

<thead>
    <tr>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>Product Quantity</th>
        <th>Price</th>
        
       
        <th>Sub Total</th>
        <th>Action</th>
    </tr>
</thead>

<tbody>
    <tr>
      
        @php
            $count=0;
            $gst=0;
            $total=0;
           
        @endphp
        @foreach($cust as $item)
    
        
      <tr>
        <td>{{$item->id}}</td>
        <td>
        
        @php
            $productid=DB::table('product_entry_models')->where('id', $item->productid)->get();
           $productName=DB::table('product_models')->where('id', $productid[0]->pnameid)->value('productname');
        @endphp
        {{$productName}}-{{$productid[0]->category}}-{{$productid[0]->color}}
        </td>
        <td>{{$item->qty}}</td>
        <td>{{$item->pprice}}</td>
        <th>@php
            $eval=$item->qty."*".$item->pprice;
            $p = eval('return '.$eval.';');
            $count=$count+$p;
            $gst=($count*5)/100;
            $total=$count + $gst;
           $i=1;
        @endphp
        {{$p}}</th>
       
     
     
        <th><a href="{{ url('qty/'.$item->id) }}" class="btn btn-warning">Qty Update</a> 
            <a href="{{ url('deleteaddtocart/'.$item->id) }}" class="btn btn-danger" onclick="return confirm('Are u sure delete')">X</a></td>
        </th>
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        <td><a href="/viewproduct" class="btn btn-danger">Continue Shopping</a></td>
        <td colspan="2"></td>
        <th>Total Amount<br>GST(5%)</th>
       
         <th>{{$count}} Rs <br>{{$gst}} Rs</th>

    </tr>
    <tr>
     
        <td colspan="3"></td>
        <th>Final Amount</th>
       
         <th>{{$total}} Rs</th>
    </tr>
</tfoot>

    </table>

</div>

</div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    
<!-- ./wrapper -->
<center>
    <div class="container">
        <form action="{{url('checkoutinsertdata')}}" method="post">
            @csrf
            <label for="">Order Date</label>
            <input type="text" class="form-control" name="orderdate" value="{{now()->format('Y-m-d')}}"required readonly>
            <h6 style="color=red;">@error('orderdate'){{$message}}@enderror</h6>

            <label for="">Full Name</label>
            <input type="text" class="form-control" name="custname" value="{{old('custname')}}"required placeholder="Enter Full Name">
            <h6 style="color=red;">@error('custname'){{$message}}@enderror</h6>

            <label for="">Address</label>
            <input type="text" class="form-control" name="address" value="{{old('address')}}"required placeholder="Enter Address">
            <h6 style="color=red;">@error('address'){{$message}}@enderror</h6>

            <label for="">Mobile No</label>
            <input type="text" class="form-control" name="mobileno" value="{{old('mobileno')}}"required placeholder="Enter Mobile No">
            <h6 style="color=red;">@error('mobileno'){{$message}}@enderror</h6>

            <label for="">Email Id</label>
            <input type="text" class="form-control" name="custemail" value="{{old('custemail')}}"required placeholder="Enter Email Id">
            <h6 style="color=red;">@error('custemail'){{$message}}@enderror</h6>

            <label for="">Pincode</label>
            <select name="pincode" id="" class="form-control" require>
              <option value="">Select Pincode</option>
              @foreach ($data2 as $row2)
              <option value="{{$row2->pincode}}">{{$row2->pincode}}</option>
              @endforeach
</select>

  
<label for="">Shipping Type</label>
            <input type="text" class="form-control" name="shippingtype" value="COD(Case On Delivery)"required reatone>
            <h6 style="color=red;">@error('shippingtype'){{$message}}@enderror</h6>

            <input type="hidden" class="form-control" name="billno" value="0" required>
            <input type="hidden" class="form-control" name="total" value="{{$total}}" required>
            <button type="submit" class="btn btn-success">Checkout</button>

            

        </form>
    </div>
</center>
@endsection