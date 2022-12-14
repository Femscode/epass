<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CheckIn;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    public function index() {
        $data['user'] = $user = Auth::user();
        
        $data['checkins'] = CheckIn::where('staff_id',$user->uuid)->where('status','approved')->orWhere('status','unapproved')->latest()->get();
        $data['approved'] =  CheckIn::where('staff_id',$user->uuid)->where('status','staff_approved')->latest()->get();
        return view('staff.index',$data);
    }
    public function pending_visit() {
        $data['user'] = $user = Auth::user();
        
        $data['checkins'] = CheckIn::where('staff_id',$user->uuid)->where('status','approved')->orWhere('status','unapproved')->latest()->paginate(3);
        return view('staff.pending_visit',$data);
    }
    public function profile() {
        $data['user'] = $user = Auth::user();
        
        $data['checkins'] = CheckIn::where('staff_id',$user->uuid)->where('status','approved')->orWhere('status','unapproved')->latest()->paginate(3);
        return view('staff.profile',$data);
    }
    public function update_profile(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            // 'gender' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);
        $user = Auth::user();
        if($request->has('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();

            $image->move(public_path().'/visitor_images',$imageName);
            $user->image = $imageName;
        }
        $user->name = $request->name;
        // $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect()->route('dashboard')->with('message','Profile Updated Successfully');
        dd($request->all());
    }
    public function approved_visit() {
        $data['user'] = $user = Auth::user();
        
        $data['approved'] =  CheckIn::where('staff_id',$user->uuid)->where('status','staff_approved')->paginate(3);
        return view('staff.approved_visit',$data);
    }
    public function in_records() {
        $data['user'] = $user = Auth::user();
        $data['checkins'] = CheckIn::where('staff_id',$user->uuid)->get();
        return view('staff.records',$data);
    }
    public function out_records() {
        $data['user'] = $user = Auth::user();
        $data['checkins'] = CheckIn::where('user_id',$user->uuid)->get();
        return view('staff.records',$data);
    }
    public function staff_checkin() {
        $data['user'] = $user = Auth::user();
        $data['departments'] = Department::where('company_id',$user->company_id)->get();

        return view('staff.checkin',$data);
    }
    public function visitor_checkin() {
        $data['user'] = $user = Auth::user();
        $data['companies'] = User::where('user_type','admin')->get();

        return view('visitor.checkin',$data);
    }
}
