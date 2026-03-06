<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CustomerRegModel;
use App\Models\PincodeModel;
use App\Models\ProductEntryModel;
use App\Models\ProductEntryViewModel;
use App\Models\CheckoutModel;
use App\Models\CartModel;
use App\Models\FeedbackModel;
use seesion;


class AdminPanelController extends Controller
{
    public function product()
    {
        $product = ProductModel::all();
        return view('adminpanel.product',compact('product'));
    }

    public function adminindex()
    {
        return view('adminpanel.index');
    }
    public function insertproduct(Request $request)
    {
        $validated = $request->validate([
            'productname'=> 'required||unique:product_models||min:3']);
        $s = new ProductModel;
        $s->productname=$request->input('productname');
        $s->save();
        return redirect('product')->with('status','Product Added Successfully');
    }

public function destory($id)
{
    $del = ProductModel::find($id);
    $del->delete();
    return redirect('/product')->with('status','Product Deleted Successfully');
}
public function edit($id)
{
    $edit = ProductModel::find($id);
    return view('adminpanel.edit',compact('edit'));
}
public function update(Request $request,$id)
{
    $update = ProductModel::find($id);
    $update->productname=$request->input('productname');
    $update->update();
    return redirect('/product')->with('status','Product updated Successfully');
}
//pincode
public function pincode()
{
   
    $pincode = PincodeModel::all();
        return view('adminpanel.pincode',compact('pincode'));
}
public function insertpincode(Request $request)
{
    $validated = $request->validate([
        'pincode'=> 'required||unique:pincode_models||min:3']);
    $s = new PincodeModel;
    $s->pincode=$request->input('pincode');
    $s->save();
    return redirect('pincode')->with('status','Pincode Added Successfully');
}
public function destroy_pincode($id)
{
    $del = PincodeModel::find($id);
    $del->delete();
    return redirect('/pincode')->with('status','Pincode Deleted Successfully');
}
public function edit_pincode($id)
{
    $edit = PincodeModel::find($id);
    return view('adminpanel.editpincode',compact('edit'));
}
public function update_pincode(Request $request,$id)
{
    $update = PincodeModel::find($id);
    $update->pincode=$request->input('pincode');
    $update->update();
    return redirect('pincode')->with('status','Pincode updated Successfully');
}

//product entry
public function productEntry()
{
    $data=ProductModel::all();
    return view('adminpanel.productentry',compact('data'));
}
public function insertproductentry(Request $request)
{
   
    $product = new ProductEntryModel;
    $product->category=$request->input('category');
    $product->pnameid=$request->input('pnameid');
    $product->company=$request->input('company');
    $product->color=$request->input('color');
    $product->material=$request->input('material');
    $product->size=$request->input('size');
    $product->description=$request->input('description');

        $file= $request->file('image');
        $extenstion=$file->getClientOriginalExtension();
         $filename=rand(11111,99999).'.'.$extenstion;
         $file->move('image_upload/',$filename);
        $product->image=$filename;

        $file1= $request->file('image1');
        $extenstion=$file1->getClientOriginalExtension();
         $filename1=rand(11111,99999).'.'.$extenstion;
         $file1->move('image_upload/',$filename1);
        $product->image1=$filename1;

        $file2= $request->file('image2');
        $extenstion=$file2->getClientOriginalExtension();
         $filename2=rand(11111,99999).'.'.$extenstion;
         $file2->move('image_upload/',$filename2);
        $product->image2=$filename2;

        $file3= $request->file('image3');
        $extenstion=$file3->getClientOriginalExtension();
         $filename3=rand(11111,99999).'.'.$extenstion;
         $file3->move('image_upload/',$filename3);
        $product->image3=$filename3;

        $file4= $request->file('image4');
        $extenstion=$file4->getClientOriginalExtension();
         $filename4=rand(11111,99999).'.'.$extenstion;
         $file4->move('image_upload/',$filename4);
        $product->image4=$filename4;
        $product->price=$request->input('price');    
        $product->save();
        return redirect('/productentry')->with('status','Productentry Added Successfully');
    
}
public function productentryview()
    {
        $product = ProductEntryModel::with('product')->get();
        return view('adminpanel.productentryview',compact('product'));
    }
    public function index()
    {
        return view('adminpanel.index');
    }
    public function insertproductentryview(Request $request)
    {
        $validated = $request->validate([
            'productentryname'=> 'required||unique:product_models||min:3']);
        $s = new ProductModel;
        $s->productname=$request->input('productentryname');
        $s->save();
        return redirect('productentryview')->with('status','Product Added Successfully');
    }

    public function destroy_productentryview($id)
    {
        $del = ProductEntryModel::find($id);
        $del->delete();
        return redirect('productentryview')->with('status','Product Entry Deleted Successfully');
    }
// public function editproductentryview($id)
// {
//     $edit = ProductentryviewModel::find($id);
//     return view('adminpanel.edit',compact('edit'));
// }
// public function updateproductentryview(Request $request,$id)
// {
//     $update = ProductentryviewModel::find($id);
//     $update->productname=$request->input('productentryviewname');
//     $update->update();
//     return redirect('/productentryview')->with('status','Product updated Successfully');
// }
public function customerview()
    {
        $customerview = CustomerRegModel::all();
        return view('adminpanel.customerview' ,compact('customerview'));
    
    
    }
    public function password()
    {
        
       return view('adminpanel.password');
      
    }
    public function customerorder()
    {
        $order = CheckoutModel::all();
       return view('adminpanel.customerorder',compact('order'));
      
    }
    public function customerorderdetail($id)
    {
        $customerorderdetail = CartModel::where(['billno'=>$id])->get();
        return view('adminpanel.customerorderdetail',compact('customerorderdetail'));
    }
    public function process_status($id)
    {
        $sta=CartModel::find($id);
        if($sta)
        {
            if($sta->pstatus)
            {
                $sta->pstatus = 'process';
            }else{
                $sta->pstatus = 'order'; 
            }
            $sta->save();
        }
        return back();
    }
    public function deliver_status($id)
    {
        $sta=CartModel::find($id);
        if($sta)
        {
            if($sta->pstatus)
            {
                $sta->pstatus = 'deliver';
            }else{
                $sta->pstatus = 'dispatch'; 
            }
            $sta->save();
        }
        return back();
    }
    public function feedbackview()
    {
        $feedback=FeedbackModel::all();
        return view('adminpanel.feedbackview',compact('feedback'));
    }
    public function dispatch_status($id)
    {
        $sta=CartModel::find($id);
        if($sta)
        {
            if($sta->pstatus)
            {
                $sta->pstatus = 'dispatch';
            }else{
                $sta->pstatus = 'process'; 
            }
            $sta->save();
        }
        return back();
    }

}