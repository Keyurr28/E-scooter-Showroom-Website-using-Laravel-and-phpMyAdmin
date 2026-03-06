@extends('customerpanel.customermaster')
@section('content')
<br>
<section class="content-header">
      <div class="container">
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
      <h3 style ="color: blue;">{{session('status')}}</h3>
      @endif
    </center>
   
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              
              <div class="col-sm">
                <ol class="breadcrumb float-sm-right">
                  
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  
                  <!-- /.card-header -->
                  
                <!-- /.card -->
    
                <div class="card">
                  <div class="card-header">
                    <center>
                    <a href="" class="btn btn-danger"> Order Detail</a>
                </center>
                </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <table class="table table-hover">

<thead>
    <tr>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>Product Quantity</th>
        <th>Price</th>
        
       
        <th>Sub Total</th>
        <td>status</th>
        
    </tr>
</thead>

<tbody>
    <tr>
      
        @php
            $count=0;
            $gst=0;
            $total=0;
           
        @endphp
        @foreach($vieworderdetail as $item)
    
        
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
        <td>
          @if($item->pstatus == 'cancel')
          <a href="" class="btn btn-danger">Cancel</a>
          @elseif($item->pstatus == 'order')
<a href="" class="btn btn-info">Order</a>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Order 25%</div>
</div>

@elseif($item->pstatus == 'process')
<a href="" class="btn btn-info">Process</a>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Process 50%</div>
</div>
@elseif($item->pstatus == 'dispatch')
<a href="" class="btn btn-info">Dispatch</a>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Dispatch 75%</div>
</div>
@elseif($item->pstatus == 'deliver')
<a href="" class="btn btn-info">Deliver</a>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Deliver 100%</div>
</div>
         
          @endif
       </td>
       
     
     
        
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
                   <!--<center >
                    <a href="/checkout" class="btn btn-success">Checkout</a>
                        </center>-->
                  </div>
                  <!-- /.card-body -->
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


   @endsection