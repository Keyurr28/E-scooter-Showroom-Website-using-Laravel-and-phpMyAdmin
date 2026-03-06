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
    <h3 style ="color:green;">{{session('status')}}</h3>
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
                <h3 class="card-title">Product Master</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="{{url('insertproduct')}}"   method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Master</label>
                    <input type="text" name="productname" class="form-control" value="{{old('productname')}}"  id="exampleInputEmail1" placeholder="Enter Product">
                  </div>
                  <h6 style="color:red">@error('productname'){{$message}}@enderror</h6>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
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
                    <h3 class="card-title">View Product</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>Product Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                       
                      </tr>
                      </thead>
                   <tbody>
                   @foreach($product as $item)   

                        <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->productname}}</td>
                          <td><a href="{{url('editproduct/'.$item->id)}}" class="btn btn-success">Edit</a></td>
                          <td><a href="{{url('deleteproduct/'.$item->id)}}" class="btn btn-danger" onclick="return confirm('Are u sure delete')">Delete</a></td>

                        </tr>
                        @endforeach

                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>Product Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                      </tfoot>
                   
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