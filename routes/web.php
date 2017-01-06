<?php
use App\User;
use App\Address;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/insert', function()
{
  $user = User::findOrfail(1);
  $address = new Address(['name'=>'109 M.6 Huymoung 73140']);
  $user ->address()->save($address);
});
Route::get('/update', function()
{
  $address = Address::where('user_id',"=",1)->first();
  //$address = Address::whereUserId(1)->first();
  $address->name = "123/4 BKK";
  $address->save();
});
