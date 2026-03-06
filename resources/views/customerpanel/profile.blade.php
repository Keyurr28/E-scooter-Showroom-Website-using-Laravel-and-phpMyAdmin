@extends('customerpanel.customermaster')
@section('content')
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
                    <a href="" class="btn btn-danger">View Password</></a>
                    </center>
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
                        <th>Date of Birth</th>
                        <th>Email Id</th>
                        <th>edit</th>
                        
                       
                      </tr>
                      </thead>
                      <tbody>
                        
                      <tbody>
                        @foreach($view as $item)
                        <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->address}}</td>
                          <td>{{$item->city}}</td>
                          <td>{{$item->gender}}</td>
                          <td>{{$item->mobileno}}</td>
                          <td>{{$item->dob}}</td>
                          <td>{{$item->emailid}}</td>
                          <td><a href="{{url('editprofile/'.$item->id)}}" class="btn btn-success">Edit</a></td>
                        

                        </tr>
                        @endforeach
                      </tbody>
                    </tr>
                      </tfoot>
                     
                    </table>
                    <center>
                    <a href="/changepassword" class="btn btn-success">Change Password</></a>
</center>
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