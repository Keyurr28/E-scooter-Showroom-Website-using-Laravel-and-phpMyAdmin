@extends('adminpanel.master')

@section('content')
<br><br><br><br><br><br>
<div id="header-carousel" class="carousel slide" data-ride="carousel">
 <center>
    <h1>Change Password</h1>
</center>
    <div class="container">
    
  <div class="well well-sm"> 
 <div class="cart-body">
    @if(session('success'))

    <h3 style="color:red">{{session('success')}}</h3>
    
    @endif
   

  <center>
    <form action="changepassword" method="post" id="changepasswordform">
        @csrf
        <input id="id" name="id" type="hidden"
            class="form-control" value="{{ Session::get('AdminLogginId')['id'] }}">
        <input id="password" name="password" type="hidden"
            class="form-control"
            value="{{ Session::get('AdminLogginId')['password'] }}">
        <div class="form-group">
            <label>Old Password</label>
            <input id="oldpassword" name="oldpassword" type="password"
                class="form-control" required>
            <div class="invalid-feedback pt-2">
                Wrong Old Password
            </div>
        </div>
        <div class="form-group">
            <label>New Password</label>
            <input id="newpassword" name="newpassword" type="password"
                class="form-control" required>
            <div class="invalid-feedback pt-2">
                Please Enter Minimum 8 Character Password
            </div>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input id="conpassword" name="conpassword" type="password"
                class="form-control" required>
            <div class="invalid-feedback pt-2">
                Confirm Password And New Password Does Not Match !!
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Save Changes</button>
    </form>

  </center>
</div>
</div>
</div>


</div>
<br>
<script>
    $("#changepasswordform").submit(function() {
        var invalid = false
        var password = document.getElementById('password').value
        var oldpass = document.getElementById("oldpassword").value
        var newpass = document.getElementById("newpassword").value
        var conpass = document.getElementById("conpassword").value

        oldpass = oldpass.trim()
        if (oldpass != password) {
            $("#oldpassword").addClass("is-invalid");
            invalid = true;
        } else {
            $("#oldpassword").removeClass("is-invalid");
        }

        newpass = newpass.trim()
        if (newpass.length < 8) {
            $("#newpassword").addClass("is-invalid");
            invalid = true;
        } else {
            $("#newpassword").removeClass("is-invalid");
        }

        if (newpass != conpass) {
            $("#conpassword").addClass("is-invalid");
            invalid = true;
        } else {
            $("#conpassword").removeClass("is-invalid");
        }

        if (invalid) {
            //Suppress form submit
            return false;
        } else {
            return true;
        }

    });
</script>

@endsection