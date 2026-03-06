@extends('adminpanel.master')

@section('content')

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
      <h3 style="color:red;">{{session('status')}}</h3>
      @endif
  
    </center>
    <!-- Main content -->
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">View Customer Order</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
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
                <table class="table table-hover">

<thead>
    <tr>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>Product Quantity</th>
        <th>Price</th>
        
       
        <th>Sub Total</th>
        <th>Status</th>
    </tr>
</thead>

<tbody>
    <tr>
      
        @php
            $count=0;
            $gst=0;
            $total=0;
           
        @endphp
        @foreach($customerorderdetail as $item)
    
        
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
          <a href="orderuser/{{$item->id}}" class="btn btn-success" onclick="return confirm('are you sure want to process?')">order</a>
         @elseif($item->pstatus == 'process')
         <a href="orderuser1/{{$item->id}}" class="btn btn-success" onclick="return confirm('are you sure want to process?')">Process</a>
         @elseif($item->pstatus == 'dispatch')
         <a href="orderuser2/{{$item->id}}" class="btn btn-success" onclick="return confirm('are you sure want to deliver?')">Dispatch</a>
         @else
         <a href="" class ="btn btn-secondary">Deliver</a>
         @endif
       </td>
     
     
        
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        
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
            <!-- /.card -->
            </div>
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   
      <!-- Navbar -->
      
    
      <!-- Content Wrapper. Contains page content -->
     
        <!-- Content Header (Page header) -->
        
                  
                  <!-- /.card-header -->
                  
                <!-- /.card -->
    
                
                  <!-- /.card-header -->
                  
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
      
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    
<!-- ./wrapper -->

@endsection