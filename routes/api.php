<?php

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::any('paystack/webhook', function (Request $request) {
    file_put_contents(__DIR__ . '/stakelog.txt', json_encode($request->all(), JSON_PRETTY_PRINT), FILE_APPEND);
    $email = $request->input('data.customer.email');
    $r_amountpaid = ($request->input('data.amount')) / 100;
    $amountpaid = $r_amountpaid - (0.10 * $r_amountpaid);
    
    $user_id = User::where('email', $email)->firstOrFail()->id;
    $user = User::find($user_id);
 
        $before = $user->balance;
        $uuid = Str::uuid();
       
      
        $tranx =  Transaction::create([
            'uuid' => $uuid,
            'user_id' => $user->uuid,
            'title' => 'Paystack Wallet Funding',
            'balance_before' => $before,
            'balance_after' => $before + $amountpaid,
            'type' => 'credit',
            'status' => 1,
            'details' => "Wallet Funded with ". $amountpaid. " automatically.",
            'amount' => $amountpaid,
        ]);
        $user->balance += $amountpaid;
        $user->save();
      

  


    return response()->json("OK", 200);
})->name('handlewebhook');

