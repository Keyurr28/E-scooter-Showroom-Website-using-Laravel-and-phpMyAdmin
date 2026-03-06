@extends('customerpanel.customermaster')
@section('content')
<br><br>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Feedback</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('customerindex')}}">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Submit Feedback</h3>
              </div>
              <div class="card-body">
                @if(session('status'))
                  <div class="alert alert-success">
                    {{session('status')}}
                  </div>
                @endif

                <form action="{{url('insertfeedback')}}" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="custname">Full Name</label>
                    <input type="text" class="form-control" name="custname" value="{{old('custname')}}" required placeholder="Enter Full Name">
                    <span class="text-danger">@error('custname'){{$message}}@enderror</span>
                  </div>
                  
                  <div class="form-group">
                    <label for="mobileno">Mobile No.</label>
                    <input type="number" class="form-control" name="mobileno" value="{{old('mobileno')}}" required placeholder="Enter Mobile No" maxlength="11">
                    <span class="text-danger">@error('mobileno'){{$message}}@enderror</span>
                  </div>

                  <div class="form-group">
                    <label for="custemail">Email Id</label>
                    <input type="email" class="form-control" name="custemail" value="{{old('custemail')}}" required placeholder="Enter Email Id">
                    <span class="text-danger">@error('custemail'){{$message}}@enderror</span>
                  </div>

                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" required placeholder="Enter Description" rows="4">{{old('description')}}</textarea>
                    <span class="text-danger">@error('description'){{$message}}@enderror</span>
                  </div>

                  <button type="submit" class="btn btn-success">Submit Feedback</button>
                </form>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Feedback History</h3>
              </div>
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Full Name</th>
                      <th>Mobile No.</th>
                      <th>Email Id</th>
                      <th>Description</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($feedback as $item)
                      <tr>
                        <td>{{$item->custname}}</td>
                        <td>{{$item->mobileno}}</td>
                        <td>{{$item->custemail}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->created_at->format('d M Y')}}</td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="5" class="text-center">No feedback found</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection