@extends('master')
 @section('content')
<br><br>
<br><br>
 <center>
<h1>Login</h1></center>
<form action="/admin_check" method="post">
  @csrf
   
  <div class="imgcontainer">
  </div>

  <div class="container">
  @if(Session::get('success'))
    <div class="alert alert-success">
    {{ Session::get('success')}}
    </div>
@endif
@if(Session::get('fail'))
    <div class="alert alert-danger">
       {{ Session::get('fail')}}
    </div>
@endif


  
      <label>Select User</label>
    <select required name="user" class="form-control">
        <option value="">---Select User----</option>
            <option value="admin">Admin</option>
            <option value="customer">customer</option>
        
    </select> 
    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
       
    <button type="submit">Login</button>
   <!-- <label>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </label> -->
  </div>

 
</form>
                <center> 
                 <h2> <a href="/register" style="color:green">***New Customer Register</a></h2></center>
<br><br><br><br>

@endsection