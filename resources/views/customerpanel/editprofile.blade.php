@extends('customerpanel.customermaster')
@section('content')

<br><br><br>

<div id="header-carousel" class="carousel slide" data-ride="carousel">
 
   
    <div class="container">
    
  <div class="well well-sm"> 
 <div class="cart-body">
    @if(session('success'))

    <h3 style="color:red">{{session('success')}}</h3>
    
    @endif
   

  <center>
  <form action="{{url('updateprofile/'.$editprofile->id)}}" method="post" id="changepasswordform"
                        style="width:40%; margin:auto; border:none; color:white;">
                        @csrf
                        @method('PUT')
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$editprofile->name}}"id="exampleInputEmail1" placeholder="Enter Name">
                        <label for="name">Address</label>
                        <input type="text" name="address" class="form-control" value="{{$editprofile->address}}"id="exampleInputEmail1" placeholder="Enter Address">
                        <label for="name">City</label>
                        <input type="text" name="city" class="form-control" value="{{$editprofile->city}}"id="exampleInputEmail1" placeholder="Enter City">
                        
                      
                        <button class="btn btn-dark" type="submit" >Save Changes</button>
                    </form>

  </center>
</div>
</div>
</div>


</div>
<br>
<script>
    $("changepasswordform").submit(function() {
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




<br><br><br>
@endsection