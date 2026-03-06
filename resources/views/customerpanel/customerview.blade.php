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
                        <th>id</th>
                        <th>name</th>
                        <th>address</th>
                        <th>city</th>
                        <th>gender</th>
                        <th>mobileno</th>
                        <th>dob</th>
                        <th>emailid</th>
                        <th>password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                      </tr>
                      </thead>
                      <tbody>
                       
                      @foreach($data as $item)
                        <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->address}}</td>
                          <td>{{$item->city}}</td>
                          <td>{{$item->gender}}</td>
                          <td>{{$item->mobileno}}</td>
                          <td>{{$item->dob}}</td>
                          <td>{{$item->emailid}}</td>
                          <td>{{$item->password}}</td>

                          <td><a href="" class="btn-success">Edit</a></td>
                          <td><a href="{{url('deleteregister/'.$item->id)}}"class="btn btn-danger" onlick="return confirm('Are u sure delete')">Delete</a></td>
                      
                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                      <th>id</th>
                        <th>name</th>
                        <th>address</th>
                        <th>city</th>
                        <th>gender</th>
                        <th>mobileno</th>
                        <th>dob</th>
                        <th>emailid</th>
                        <th>password</th>
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