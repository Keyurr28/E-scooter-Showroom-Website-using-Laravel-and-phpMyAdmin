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
                    <a href="" class="btn btn-danger">My Order</a>
                </center>
                </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Order Date</th>
                        <th>Full Name</th>
                        <th>Address</th>
                        <th>Mobile No.</th>
                        <th>Email Id</th>
                        <th>Pincode</th>
                        <th>Bill No</th>
                        <th>Cust Id</th>
                        <th>Shipping  Type</th>
                        <th>Total</th>
                        <th>View Product</th>
                        <th>View Details</th>
                        
                       
                      </tr>
                      </thead>
                      
                      <tbody>
                      @foreach($view as $item)
                        <tr>
                        <td>{{$item->orderdate}}</td>
                          <td>{{$item->custname}}</td>
                          <td>{{$item->address}}</td>
                          <td>{{$item->mobileno}}</td>
                          <td>{{$item->custemail}}</td>
                          <td>{{$item->pincode}}</td>
                          <td>{{$item->billno}}</td>
                          <td>{{$item->custid}}</td>
                          <td>{{$item->shippingtype}}</td>
                          <td>{{$item->total}}</td>
                          <td><a href="vieworderdetail/{{$item->billno}}" class="btn btn-primary">View Product</a></td>
                          <td><a href="bill/{{$item->billno}}" class="btn btn-warning">View Bill</a></td>
                          <!-- <td><a href="" class="btn btn-success">Edit</a></td> -->
                        

                        </tr>
                        @endforeach
                      </tbody>
                      
                      <tfoot>
                      <tr>
                      
                   
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