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
                    <h3 class="card-title">View Product</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Product Name</th>
                        <th>Company</th>
                        <th>Color</th>
                        <th>Material</th>
                        <th>Size</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Image1</th>
                        <th>Image2</th>
                        <th>Image3</th>
                        <th>Image4</th>
                        <th>Delete</th>
                       
                      </tr>
                      </thead>
                      <tbody>
                        @foreach($product as $item)
                        <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->category}}</td>
                          <td>{{$item->product ? $item->product->productname : 'N/A'}}</td>
                          <td>{{$item->company}}</td>
                          <td>{{$item->color}}</td>
                          <td>{{$item->material}}</td>
                          <td>{{$item->size}}</td>
                          <td>{{$item->description}}</td>
                          <td>{{$item->price}}Rs</td>
                          <td><img src="image_upload/{{$item->image}}" height="100px"width="100px"></td>
                          <td><img src="image_upload/{{$item->image1}}" height="100px"width="100px"></td>
                          <td><img src="image_upload/{{$item->image2}}" height="100px"width="100px"></td>
                          <td><img src="image_upload/{{$item->image3}}" height="100px"width="100px"></td>
                          <td><img src="image_upload/{{$item->image4}}" height="100px"width="100px"></td>
                          <!-- <td><a href="{{url('editproductentryview/'.$item->id)}}" class="btn btn-success">Edit</a></td> -->
                          <td><a href="{{url('deleteproductentryview/'.$item->id)}}" class="btn btn-danger" onclick="return confirm('Are u sure delete')">Delete</a></td>

                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                      <!-- <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Product Name</th>
                        <th>Company</th>
                        <th>Company</th>
                        <th>Color</th>
                        <th>Material</th>
                        <th>Size</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Image1</th>
                        <th>Image2</th>
                        <th>Image3</th>
                        <th>Image4</th>
                      </tr> -->
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