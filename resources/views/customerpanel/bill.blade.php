@extends('customerpanel.customermaster')
@section('content')
<center>
    <h2>View Bill</h2>
    <table border="1" cellspacing="0" cellpadding="0" class="table">
        <tr>
          <td width="616" colspan="10" valign="top"><p align="center"><strong>Invoice</strong></p></td>
        </tr>
        @foreach($cust as $item)
        @php
            $bill_id = $item->id;
        @endphp
        <tr>
          <td width="73" valign="top"><p><strong>Bill No</strong></p></td>
          <td width="344" colspan="6" valign="top"><p> {{$item->id}}</p></td>
          <td width="59" colspan="2" valign="top"><p><strong>Date:</strong></p></td>
          <td width="140" valign="top"><p>{{$item->orderdate}}</p></td>
        </tr>
       
        <tr>
          <td width="121" colspan="2" valign="top"><p><strong>Customer Name</strong></p></td>
          <td width="496" colspan="8" valign="top"><p>{{$item->custname}}</p></td>
        </tr>
        <tr>
          <td width="121" colspan="2" valign="top"><p><strong>Address</strong></p></td>
          <td width="496" colspan="8" valign="top"><p>{{$item->address}}</p></td>
        </tr>
        <tr>
          <td width="121" colspan="2" valign="top"><p><strong>Pincode</strong></p></td>
          <td width="496" colspan="8" valign="top"><p>{{$item->pincode}}</p></td>
        </tr>
        <tr>
          <td width="121" colspan="2" valign="top"><p><strong>Mobile No</strong></p></td>
          <td width="180" colspan="2" valign="top"><p>{{$item->mobileno}}</p></td>
          <td width="76" colspan="2" valign="top"><p><strong>Email id</strong></p></td>
          <td width="240" colspan="4" valign="top"><p>{{$item->custemail}}</p></td>
        </tr>
        <tr>
          <td width="121" colspan="2" valign="top"><p><strong>Shipping Type</strong></p></td>
          <td width="496" colspan="8" valign="top"><p>{{$item->shippingtype}}</p></td>
        </tr>
        @endforeach 
        <tr>
          <td width="616" colspan="10" valign="top"><p>&nbsp;</p></td>
        </tr>
        <tr>
          <td width="73" valign="top"><p><strong>Sr No</strong></p></td>
          <td width="145" colspan="2" valign="top"><p><strong>Product Name</strong></p></td>
          <td width="98" colspan="2" valign="top"><p><strong>Qty</strong></p></td>
          <td width="101" colspan="2" valign="top"><p><strong>Price(Per Qty)</strong></p></td>
          <td width="198" colspan="3" valign="top"><p><strong>Total Price</strong></p></td>
        </tr>
        @php
        $count=0;
        $gst=0;
        $total=0;
        $k=1;
       
    @endphp
        @foreach($cust1 as $item1)
        <tr>
          <td width="73" valign="top"><p>{{$k}}</p></td>
          <td width="145" colspan="2" valign="top"><p>@php
            $productid=DB::table('product_entry_models')->where('id', $item1->productid)->get();
           $productName=DB::table('product_models')->where('id', $productid[0]->pnameid)->value('productname');
        @endphp
        {{$productName}}-{{$productid[0]->category}}-{{$productid[0]->color}}</p></td>
          <td width="98" colspan="2" valign="top"><p>{{$item1->qty}}</p></td>
          <td width="101" colspan="2" valign="top"><p>{{$item1->pprice}} Rs</p></td>
          <td width="198" colspan="3" valign="top"><p>
            @php
            $eval=$item1->qty."*".$item1->pprice;
            $p = eval('return '.$eval.';');
            $count=$count+$p;
            $gst=($count*5)/100;
            $total=$count + $gst;
           $i=1;
        @endphp
        {{$p}} Rs</p></td>
       
        </tr>
        @php
        $k++;
  @endphp
        @endforeach
        <tr>
          <td width="616" colspan="10" valign="top"><p>&nbsp;</p></td>
        </tr>
        <tr>
          <td width="317" colspan="5" rowspan="3" valign="top"><p>&nbsp;</p></td>
          <td width="132" colspan="3" valign="top"><p><strong>Total Amount</strong></p></td>
          <td width="167" colspan="2" valign="top"><p>{{$count}} Rs </p></td>
        </tr>
        <tr>
          <td width="132" colspan="3" valign="top"><p><strong>GST Amount (5%)</strong></p></td>
          <td width="167" colspan="2" valign="top"><p>{{$gst}} Rs</p></td>
        </tr>
        <tr>
          <td width="132" colspan="3" valign="top"><p><strong>Final Amount</strong></p></td>
          <td width="167" colspan="2" valign="top"><p>{{$total}} Rs</p></td>
        </tr>
        <tr>
          <td width="616" colspan="10" valign="top"><p><strong>Note:</strong></p>
              <p>&nbsp;</p>
            <p><strong>Customer Sign&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Authority Sign</strong></p></td>
        </tr>
      </table>
      <!-- {-- <a href="{{url('/invoice_pdf/'.$bill_id)}}" target="blank">Print Bill</a> --} -->
</center>
@endsection