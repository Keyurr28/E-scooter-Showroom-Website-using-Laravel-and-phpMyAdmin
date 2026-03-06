<?php

namespace App\Http\Controllers;

use App\Models\CustomerRegModel;
use App\Models\ProductEntryModel;
use App\Models\CartModel;
use App\Models\PincodeModel;
use App\Models\FeedbackModel;
use App\Models\CheckoutModel;
use DB;
use Session;
use Illuminate\Http\Request;

class CustomerPanelController extends Controller
{
    public function customerindex()
    {
        return view('customerpanel.customerindex');
    }

    public function profile()
    {
        $id = Session::get('CustomerLogginId')['id'];

        $view =  CustomerRegModel::where('id', $id)->get();
        return view('customerpanel.profile', compact('view'));
    }
    public function changepassword()
    {

        return view('customerpanel.changepassword');
    }
    public function updatepassword(Request $request, CustomerRegModel $admin)
    {

        $request->validate([
            'id' => 'required',
            'newpassword' => 'required',
        ]);

        try {
            $id = $request->id;
            $admin = CustomerRegModel::find($id);
            $admin->password = $request->newpassword;
            $admin->save();
            $admin = CustomerRegModel::find($id);
            $request->session()->flash('success', 'Password Change SuccessFully');
            $request->session()->put('CustomerLogginId', $admin);
            return view('customerpanel.changepassword');
        } catch (Exception $e) {
            $request->session()->flash('er', $e->getMessage());
            return view('customerpanel.changepassword');
        }
    }
    public function editprofile($id)
    {
        $editprofile = CustomerRegModel::find($id);
        return view('customerpanel.editprofile', compact('editprofile'));
    }


    public function updateprofile(Request  $request, $id)
    {
        $updateprofile = CustomerRegModel::find($id);
        $updateprofile->name = $request->input('name');
        $updateprofile->address = $request->input('address');
        $updateprofile->city = $request->input('city');
        $updateprofile->update();
        return redirect('profile')->with('status', 'Profile update successfully');
    }



    public function viewproduct()
    {
        $product_entry = ProductEntryModel::with('product')->get();
        return view('customerpanel.viewproduct', compact('product_entry'));
    }
    public function addtocart(Request $request)
    {
        if ($request->session()->has('CustomerLogginId')) {
            $check = CartModel::where(['productid' => $request->productid, 'pstatus' => 'cart', 'userid' => $request->session()->get('CustomerLogginId')['id']])->first();
            if ($check) {
                $s = CartModel::find($check->id);
                $s->qty = $s->qty + 1;
                $s->update();
            } else {
                $cart = new CartModel;
                $cart->userid = $request->session()->get('CustomerLogginId')['id'];
                $cart->productid = $request->productid;
                $cart->qty = $request->productqty;
                $cart->pprice = $request->pprice;
                $cart->billno = $request->billno;
                $cart->pstatus = $request->productcart;
                $cart->save();
            }
            return redirect('/viewproduct')->with('status', 'Product  Add to Cart Added Successfully');
        }
    }
    public function viewdetail($id, $category)
    {
        $viewdetail = ProductEntryModel::where(['id' => $id, 'category' => $category])->get();
        return view('customerpanel.viewdetail', compact('viewdetail'));
    }

    public static function cartitem()
    {
        $id = Session::get('CustomerLogginId')['id'];
        return CartModel::where(['userid' => $id, 'pstatus' => 'cart'])->count();
    }

    public function viewcart(Request $request)
    {
        $id = Session::get('CustomerLogginId')['id'];
        $data2 = PincodeModel::all();
        $cust = CartModel::where(['userid' => $id, 'pstatus' => 'cart'])->get();

        return view('customerpanel.addtocart', compact('cust', 'data2'));
    }
    public function edit2($id)
    {
        //$id=Session::get('CustomerLogginId') ['id'];
        $q = CartModel::find($id);
        return view('customerpanel.edit2', compact('q'));
    }
    public function update2(Request $request, $id)
    {
        //$id=Session::get('CustomerLogginId') ['id'];
        $s = CartModel::find($id);
        $s->qty = $request->input('qty');
        $s->pprice = $request->input('pprice');

        $s->update();
        return redirect('/addtocart')->with('status', 'Product Quantity Update Successfully');
    }
    public function deleteaddtocart($id)
    {
        $del = CartModel::find($id);
        $del->delete();
        return redirect('/addtocart')->with('status', 'Quantity Deleted Successfully');
    }
    public function checkoutinsertdata(Request $request)
    {
        if ($request->session()->has('CustomerLogginId')) {
            $cart = new CheckoutModel;
            $cart->custid = $request->session()->get('CustomerLogginId')['id'];
            $cart->custname = $request->custname;
            $cart->address = $request->address;
            $cart->mobileno = $request->mobileno;
            $cart->custemail = $request->custemail;
            $cart->pincode = $request->pincode;
            $cart->billno = $request->billno;
            $cart->shippingtype = $request->shippingtype;
            $cart->total = $request->total;
            $cart->orderdate = $request->orderdate;
            $cart->save();

            //cart update 
            $checkoutid = $cart->id;
            $cart->billno = $checkoutid;
            $cart->update();

            $updatearray = [
                'billno' => $checkoutid,
                'pstatus' => 'order'
            ];
            DB::table('cart_models')->where(['userid' => $cart->custid, 'pstatus' => 'cart', 'billno' => '0'])->update($updatearray);
            return redirect('viewproduct')->with('status', 'Checkout Successfully');
        }
    }
    public function myorder()
    {
        $id = Session::get('CustomerLogginId')['id'];

        $view =  CheckoutModel::all();
        return view('customerpanel.myorder', compact('view'));
    }
    public function vieworderdetail($id)
    {
        $vieworderdetail = CartModel::where(['billno' => $id])->get();
        return view('customerpanel.vieworderdetail', compact('vieworderdetail'));
    }

    public function bill($id)
    {
        $cust = CheckoutModel::where('billno', $id)->get();
        $cust1 = CartModel::where('billno', $id)->get();
        return view('customerpanel.bill', compact('cust', 'cust1'));
    }

    public function pstatus($id)
    {
        $sta = CartModel::find($id);
        if ($sta) {
            if ($sta->pstatus) {
                $sta->pstatus = 'cancel';
            } else {
                $sta->pstatus = 'order';
            }
            $sta->save();
        }
        return back();
    }

    public function feedback()
    {
        $feedback = FeedbackModel::all();
        return view('customerpanel.feedback', compact('feedback'));
    }
    public function insertfeedback(Request $request)
    {
        $s = new FeedbackModel;
        $s->custname = $request->custname;
        $s->mobileno = $request->mobileno;
        $s->custemail = $request->custemail;
        $s->description = $request->description;
        $s->save();
        return redirect('feedback')->with('status', 'Feedback Added Successfully');
    }
}
