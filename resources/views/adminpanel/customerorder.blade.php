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
                <h3 class="card-title">View Order</h3>
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
              <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>Full Name</th>
                        <th>Address</th>
                        <th>Mobile No.</th>
                        <th>Email Id</th>
                        <th>Pincode</th>
                        <th>Bill No</th>
                        <th>Cust Id</th>
                        <th>Shipping  Type</th>
                        <th>Total</th>
                        <th>Order Date</th>
                        <th>View Product</th>
                        
                      </tr>
                      </thead>
                      
                      <tbody>
                      @foreach($order as $item)
                        <tr>
                        <td>{{$item->id}}</td>
                          <td>{{$item->custname}}</td>
                          <td>{{$item->address}}</td>
                          <td>{{$item->mobileno}}</td>
                          <td>{{$item->custemail}}</td>
                          <td>{{$item->pincode}}</td>
                          <td>{{$item->billno}}</td>
                          <td>{{$item->custid}}</td>
                          <td>{{$item->shippingtype}}</td>
                          <td>{{$item->total}}</td>
                          <td>{{$item->orderdate}}</td>
                          <!-- <td><a href="" class="btn btn-success">Edit</a></td> -->
                          <td><a href="customerorderdetail/{{$item->billno}}" class="btn btn-success">View Product</a></td>
                          
                        </tr>
                        @endforeach
                      </tbody>
                      
                      <tfoot>
                      <tr>
                      
                   
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