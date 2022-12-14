<?php

namespace App\Http\Traits;

use PDF;
use App\Models\AirtimePrice;
use App\Models\Data;
use App\Models\ElectricityPrice;
use App\Models\ExamPin;
use App\Models\AdminFund;
use App\Models\Transaction;
use App\Models\TvPrice;
use App\Models\User;
use Illuminate\Support\Str;

trait TransactionTrait
{
    public function create_transaction($title, $details, $type, $amount, $user)
    {

        //    dd($title, $details, $type, intval($amount),intval($user));
        $r_user = User::where('uuid', $user)->firstOrFail();
        $uuid = Str::uuid();
        $tranx =  Transaction::create([
            'uuid' => $uuid,
            'user_id' => $user,
            'title' => $title,
            'balance_before' => $r_user->balance,
            'type' => $type,
            'details' => $details,
            'amount' => $amount,
        ]);

        if ($title == 'Manual Funding') {

            $tranx->balance_after = $r_user->balance;
            $tranx->status = 0;
            $tranx->save();
            // return $tranx->id;
            return true;
        } elseif ($title == 'Manual Funding Approved') {



            $nuser = $r_user;
            $nuser->balance += $amount;
            $nuser->save();
            $tranx->balance_after = $nuser->balance;
            $tranx->status = 1;

            $tranx->save();
            // return $tranx->id;
            return true;
        } elseif ($title == 'Bet Placed') {
            $nuser = $r_user;
            $nuser->balance -= $amount;
            $nuser->save();
            $tranx->balance_after = $nuser->balance;
            $tranx->status = 1;

            $tranx->save();
            // return $tranx->id;
         
        } elseif ($title == 'Withdraw Request') {
            $nuser = $r_user;
            $tranx->balance_after = $nuser->balance;
            $tranx->status = 0;
            $tranx->save();
            return $tranx->id;
        } elseif ($title == 'Withdraw Request Approved') {
            $nuser = $r_user;
            $tranx->balance_after = $nuser->balance;
            $tranx->status = 1;
            $tranx->save();
            return $tranx->id;

          
        } elseif ($title == "Airtime Payment") {
          
        } elseif ($title == "Exam Pin Purchase") {

          
        } else {
            $tranx->status = 'failed';
            $nuser = $r_user;
            $tranx->after = $nuser->balance;
            $tranx->save();

            return false;
        }
    }
}
