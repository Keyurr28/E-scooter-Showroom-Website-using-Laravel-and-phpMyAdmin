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
      <h3 style ="color: blue;">{{session('status')}}</h3>
      @endif
    </center>
    <!-- Main content -->
    
    <!-- <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Product Entry View</h3>
              </div>
              
              <form action="{{url('insertproductentryview')}}"   method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Entry View</label>
                    <input type="text" name="productentryview" class="form-control" value="{{old('productentryview')}}"  id="exampleInputEmail1" placeholder="Enter Product Entry">
                  </div>
                  <h6 style="color:red">@error('productname'){{$message}}@enderror</h6>
                  
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
          
        </div>
      </div>
    </section> -->
    <!-- /.content -->
   
      <!-- Navbar -->
      
    
      <!-- Content Wrapper. Contains page content -->
     
        <!-- Content Header (Page header) -->
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
                      <h1>View Feedback</h1>
                    </center>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                      <th>Full Name</th>
                        <th>Mobile No.</th>
                        <th>Email Id</th>
                        <th>Description</th>
                      </tr>
                      </thead>
                      @forelse($feedback as $item) 
                        <tr>
                          <td>{{$item->custname}}</td>
                          <td>{{$item->mobileno}}</td>
                          <td>{{$item->custemail}}</td>
                          <td>{{$item->description}}</td> 
                        </tr>
                        @empty
                        <tr>
                          <td colspan="4">No feedback found.</td>
                        </tr>
                        @endforelse
                    </table>
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
      
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    
<!-- ./wrapper -->

  @endsection