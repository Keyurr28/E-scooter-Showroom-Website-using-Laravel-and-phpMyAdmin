<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CustomerPanelController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

/*Route::get('/login', function () {
    return view('login');
});*/

/*Route::get('/adminindex', function () {
    return view('adminpanel.index');
});*/

/*Route::get('/product', function () {
    return view('adminpanel.product');
});*/

/*Route::get('/product',[AdminPanelController::class,'product']);
Route::get('/adminindex',[AdminPanelController::class,'adminindex']);
Route::post('/insertproduct',[AdminPanelController::class,'insertproduct']);
Route::get('/deleteproduct/{id}',[AdminPanelController::class,'destroy']);
Route::get('/editproduct/{id}',[AdminPanelController::class,'edit']);
Route::put('/updateproduct/{id}',[AdminPanelController::class,'update']);*/

//logim
Route::get('/login',[AdminLoginController::class,'login']);
Route::post('/admin_check',[AdminLoginController::class,'check']);

Route::middleware(['admin_login'])->group(function() 
{
    Route::get('/product',[AdminPanelController::class,'product']);
    Route::get('/adminindex',[AdminPanelController::class,'adminindex']);
    Route::post('/insertproduct',[AdminPanelController::class,'insertproduct']);
    Route::get('/deleteproduct/{id}',[AdminPanelController::class,'destroy']);
    Route::get('/editproduct/{id}',[AdminPanelController::class,'edit']);
    Route::put('/updateproduct/{id}',[AdminPanelController::class,'update']); 
//pincode
Route::get('/pincode',[AdminPanelController::class,'pincode']);
Route::post('/insertpincode',[AdminPanelController::class,'insertpincode']);
Route::get('/deletepincode/{id}',[AdminPanelController::class,'destroy_pincode']);
Route::get('/editpincode/{id}',[AdminPanelController::class,'edit_pincode']);
Route::put('/updatepincode/{id}',[AdminPanelController::class,'update_pincode']); 
//product entry
Route::get('/productentry',[AdminPanelController::class,'productentry']);
Route::post('/insertproductentry',[AdminPanelController::class,'insertproductentry']);

Route::get('/productentryview',[AdminPanelController::class,'productentryview']);
Route::get('/adminindex',[AdminPanelController::class,'adminindex']);
Route::get('changepassword',[AdminPanelController::class,'changepassword']);  //Customer change password
Route::post('changepassword',[AdminPanelController::class,'updatepassword']); //Update Password

Route::post('/insertproductentryview',[AdminPanelController::class,'insertproductentryview']);
Route::get('/deleteproductentryview/{id}',[AdminPanelController::class,'destroy_productentryview']);
Route::get('/editproductentryview',[AdminPanelController::class,'edit']);
Route::put('/updateproductentryview',[AdminPanelController::class,'update']); 
Route::get('/feedbackview', [AdminPanelController::class,'feedbackview']);

});
//logout
Route::get('admin_logout',[AdminLoginController::class,'Adminlogout']);


Route::get('/register', [AdminLoginController::class,'register']);
Route::post('/insertregister', [AdminLoginController::class,'insertregister']);
Route::get('/registrationview', [AdminPanelController::class,'registrationview']);
Route::get('/deleteregistrationview/{id}',[AdminPanelController::class,'deleteregistrationview']);
Route::get('/customerview',[AdminPanelController::class,'customerview']);

Route::get('password',[AdminPanelController::class,'password']);  //Customer change password
Route::post('password',[AdminPanelController::class,'password']); //Update Password
// Route::get('/customerview', [AdminLoginController::class,'customerview']);
Route::get('/customerorder', [AdminPanelController::class,'customerorder']);
Route::get('/customerorderdetail/{id}', [AdminPanelController::class,'customerorderdetail']);
Route::get('/customerorderdetail/orderuser/{id}', [AdminPanelController::class,'process_status']);
Route::get('/customerorderdetail/orderuser1/{id}', [AdminPanelController::class,'dispatch_status']);
Route::get('/customerorderdetail/orderuser2/{id}', [AdminPanelController::class,'deliver_status']);
Route::middleware(['customer_login'])->group(function()
{
    Route::get('customerindex',[CustomerPanelController::class,'customerindex']);
    Route::get('profile',[CustomerPanelController::class,'profile']);
    Route::get('editprofile/{id}',[CustomerPanelController::class,'editprofile']);
    Route::put('updateprofile/{id}',[CustomerPanelController::class,'updateprofile']);
   

    Route::get('changepassword',[CustomerPanelController::class,'changepassword']);  //Customer change password
    Route::post('changepassword',[CustomerPanelController::class,'updatepassword']); //Update Password

   

    Route::get('/viewproduct',[CustomerPanelController::class,'viewproduct']);
    Route::post('/addtocart',[CustomerPanelController::class,'addtocart']);
    Route::get('viewdetail/{id}/{name}',[CustomerPanelController::class,'viewdetail']);
    
  
    Route::get('/addtocart', [CustomerPanelController::class,'viewcart']);
    Route::get('qty/{id}',[CustomerPanelController::class,'edit2']);   //edit

Route::put('updatedata2/{id}',[CustomerPanelController::class,'update2']);   //update
Route::get('/deleteaddtocart/{id}',[CustomerPanelController::class,'deleteaddtocart']);

//checkout
Route::post('/checkoutinsertdata',[CustomerPanelController::class,'checkoutinsertdata']);
Route::get('/myorder',[CustomerPanelController::class,'myorder']);
Route::get('vieworderdetail/{id}',[CustomerPanelController::class,'vieworderdetail']);
Route::get('bill/{id}',[CustomerPanelController::class,'bill']);
Route::get('/vieworderdetail/orderuser/{id}',[CustomerPanelController::class,'pstatus']);
Route::get('/feedback',[CustomerPanelController::class,'feedback']);
Route::get('/feedback',[CustomerPanelController::class,'feedback']);
    Route::post('/insertfeedback',[CustomerPanelController::class,'insertfeedback']);
});
Route::get('customer_logout',[AdminLoginController::class,'customer_logout']);
