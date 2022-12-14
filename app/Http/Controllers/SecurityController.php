<?php

namespace App\Http\Controllers;

use App\Models\CheckIn;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecurityController extends Controller
{
    public function index() {
        $data['user'] = $user = Auth::user();
        $data['checkins'] = $user2 = CheckIn::where('company_id',$user->company_id)->latest()->paginate(5);
     
        return view('security.index',$data);
    }
    public function security_checkin() {
        $data['user'] = $user = Auth::user();
        $data['departments'] = Department::where('company_id',$user->company_id)->get();

        return view('security.checkin',$data);
    }
    public function approve_visitor(Request $request) {
        // dd($request->id);
        $user = Auth::user();
        $check = CheckIn::where('uuid',$request->id)->firstOrFail();
        if($check->status == 'approved') {
            $check->status = 'unapproved';
        }
        else {
            $check->status = 'approved';

        }
        $check->security_id = $user->uuid;
        $check->save();
        return $check;
    }
}
