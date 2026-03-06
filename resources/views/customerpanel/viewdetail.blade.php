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
                    <a href="" class="btn btn-danger">View Detail</a>
                </center>
                </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th> CategoryName</th>
                        <th>ProductName</th>
                        <th>CompanyName</th>
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
                        
                      </tr>
                      </thead>
                      
                      <tbody>
                      @foreach($viewdetail as $item)
                        <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->category}}</td>
                          <td>{{$item->product_entry->productname}}</td>
                          <td>{{$item->company}}</td>
                          <td>{{$item->color}}</td>
                          <td>{{$item->material}}</td>
                          <td>{{$item->size}}</td>
                          <td>{{$item->description}}</td>
                          <td>{{$item->price}}Rs</td>
                          <td><img src="{{asset('image_upload')}}/{{$item->image}}" height="100px"width="100px"></td>
                          <td><img src="{{asset('image_upload')}}/{{$item->image1}}" height="100px"width="100px"></td>
                          <td><img src="{{asset('image_upload')}}/{{$item->image2}}" height="100px"width="100px"></td>
                          <td><img src="{{asset('image_upload')}}/{{$item->image3}}" height="100px"width="100px"></td>
                          <td><img src="{{asset('image_upload')}}/{{$item->image4}}" height="100px"width="100px"></td>
                          <!-- <td><a href="{{url('editproductentryview/'.$item->id)}}" class="btn btn-success">Edit</a></td> -->
                        

                        </tr>
                        @endforeach
                      </tbody>
                      
                      <tfoot>
                      <tr>
                      
                   
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


   @endsection