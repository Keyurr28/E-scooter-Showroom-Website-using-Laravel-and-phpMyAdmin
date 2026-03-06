@extends('customerpanel.customermaster')
@section('content')
<div id="header-carousel" class="carousel slide" data-ride="carousel">
    <center>
       
        <div class="container">
       
      <div class="well well-sm"> 
      @if(session('status'))
    
    <h3 style="color:red">{{session('status')}}</h3>
    
    @endif
         <h3 class="btn btn-primary">Product Quantity Update</h3><br><br>
       
        <form action="{{url('updatedata2/'.$q->id)}}" method="post">
         @csrf
         @method('PUT')
        Product Quantity:<input type="number" name="qty" min="1" max="20" value="{{$q->qty }}"><br><br>
        <input type="hidden" name="pprice" value="{{$q->pprice}}"><br><br>
       
        
      <button type="subnmit" class="btn btn-success">Update</button><br><br>
    
     
    </form>
    </div>
      </div>
    </center>
        
</div>
@endsection
