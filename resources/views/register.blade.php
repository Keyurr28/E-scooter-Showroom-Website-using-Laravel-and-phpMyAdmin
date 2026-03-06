  @extends('master')
@section('content')

                                   
<br><br><br><br><br><br>
<center>
    @if(session('status'))
        <h1 style="color: green;">{{session('status')}}</h1>
      @endif
     <b><h2>Customer Registration</h2> </b> 
    </center>


<form action="{{url('insertregister')}}"  method="post">
    @csrf
  <div class="imgcontainer">
  </div>

  <div class="container">
    <label for="text"><b>Full name</b></label>
    <input type="text" placeholder="Enter Name" name="name" class="form-control" value="{{old('name')}}" required>
    <h6 style="color:red">@error('name'){{$message}}@enderror</h6>

    <label for="text"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" class="form-control" value="{{old('address')}}" name="address" required>
    <h6 style="color:red"> @error('address'){{$message}}@enderror</h6>

    <label for="text"><b>City</b></label>
    <input type="text" placeholder="Enter City" class="form-control" name="city" value="{{old('city')}}" required>
    <h6 style="color:red"> @error('city'){{$message}}@enderror</h6>

    <label for="text"><b>Gender</b></label><br>
    <input type="radio"  name="gender" value="Male"  required>Male
    <input type="radio" name="gender" value="Female" required>Female
    <h6 style="color:red"> @error('gender'){{$message}}@enderror</h6>
    <br><br>

    <label for="text"><b>Mobile No</b></label>
    <input type="text" placeholder="Enter Mobile No" class="form-control" value="{{old('mobileno')}}"  name="mobileno" required>
    <h6 style="color:red">@error('mobileno'){{$message}}@enderror</h6>

    <label for="date"><b>DOB</b></label>
    <input type="date" placeholder="Enter Date of Birth" class="form-control" name="dob" value="{{old('dob')}}" class="form-control" required>
    <h6 style="color:red"> @error('dob'){{$message}}@enderror</h6>

    <label for="email"><b>Email Id</b></label>
    <input type="text" placeholder="Enter Email Id" class="form-control" name="emailid" value="{{old('emailid')}}" required>
    <h6 style="color:red">@error('email'){{$message}}@enderror</h6>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" class="form-control" name="password" required>
    <h6 style="color:red">@error('password'){{$message}}@enderror</h6>
    
       
    <button type="submit" class="btn btn-danger">Register</button>
   
   <!-- <label>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </label> -->
  </div>

 
</form>
                  <a href="/login" style="color: #f44336">* Here Login</a>

                                 </center>

<br><br><br><br>

@endsection