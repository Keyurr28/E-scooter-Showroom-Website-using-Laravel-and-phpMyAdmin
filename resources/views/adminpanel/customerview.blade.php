@extends('adminpanel.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <center>
    @if(session('status'))
          <h3 style="color:green">{{session('status')}}</h3>
          @endif
    </center>
    <!-- Main content -->
    
    
                  
                <!-- /.card -->
    
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"> Customer View</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Gender</th>
                        <th>Mobile Number</th>
                        <th>Date Of Birth</th>
                        <th>Email Id</th>
                        <th>Password</th>
                     
                        <th>Delete</th>
                       
                      </tr>
                      </thead>
                      <tbody> 

                      @foreach($customerview as $item)

                        <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->name}}</td>
    
                           <td>{{$item->address}}</td>
                           <td>{{$item->city}}</td>
                           <td>{{$item->gender}}</td>
                           <td>{{$item->mobileno}}</td>
                           <td>{{$item->dob}}</td>
                           <td>{{$item->emailid}} </td>
                          <td>{{$item->password}} </td>
                        
                          
                          <td><a href="{{url('deletecustomerview/'.$item->id)}}" class="btn btn-danger" onclick="return confirm('Are u sure delete')">Delete</a></td>
  
                        </tr>

                        @endforeach

                      </tbody>
                      <tfoot>
                      <tr>
                      <th>Id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Gender</th>
                        <th>Mobile Number</th>
                        <th>Date Of Birth</th>
                        <th>Email Id</th>
                        <th>Password</th>
                        
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