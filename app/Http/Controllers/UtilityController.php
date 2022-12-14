<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CheckIn;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtilityController extends Controller
{
    //
    public function checkin() {
        $data['companies'] = User::where('user_type','admin')->get();
        $data['message'] = null;
        $data['submit'] = null;
        return view('frontend.checkin',$data);
    }
    public function get_department(Request $request) {
        $department = Department::where('company_id',$request->id)->get();
        return $department;
    }
    public function get_company(Request $request) {
        $company = User::where('user_type','admin')
        // ->where('company_type','like', '%' . $request->value . '%')
        ->where('name', 'like', '%' . $request->value . '%')
        ->get();
        return $company;
    }
    public function get_staff(Request $request) {
        $staff = User::where('department_id',$request->id)->get();
        return $staff;
    }
    public function save_checkin(Request $request) {
        $user = Auth::user();
        $company_name = User::where('uuid',$user->company_id)->firstOrFail();
        $pass_id = $company_name->name.'-'.Str::random(7);
        $uuid = Str::uuid();
        // dd($request->all(),$pass_id,$company_name);
        $data = $request->all();
        if($request->has('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path().'visitor_images',$imageName);
            $data['image'] = $imageName;
        }
      
        $data['status'] = 'unapproved';
        $data['created_by'] = $user->uuid;
        $data['company_id'] = $user->company_id;
        $data['pass_id'] = $pass_id;
        $data['uuid'] = $uuid;
        $data['user_id'] = $user->uuid;
        $checkin = CheckIn::create($data);
        return redirect()->route('dashboard')->with('message','Visitor Pass Created Successfully');
    }
    public function save_checkin_user(Request $request) {
        $user = Auth::user();
        // dd($request->all());
       
        $company_name = User::where('uuid',$request->company_id)->firstOrFail();
        $pass_id = $company_name->name.'-'.Str::random(7);
        $uuid = Str::uuid();
        // dd($request->all(),$pass_id,$company_name);
        $data = $request->all();
      
      
        $data['status'] = 'unapproved';
        $data['image'] = $user->image;
        $data['created_by'] = 'visitor';
        $data['company_id'] = $request->company_id;
        $data['phone'] = $user->phone ?? '000';
        $data['email'] = $user->email;
        $data['name'] = $user->name;
        $data['gender'] = $user->gender ?? 'not-specified';
        $data['pass_id'] = $pass_id;
        $data['uuid'] = $uuid;
        $data['user_id'] = $user->uuid;
        $checkin = CheckIn::create($data);
        $data['submit'] = null;
        return redirect()->route('dashboard')->with('message','Your Pass Id is: '.$pass_id);
    }
    public function view_checkin($id) {
        $data['checkin'] = CheckIn::where('uuid',$id)->firstOrFail();
        return view('staff.view_checkin',$data);
    }
    public function allow_visitor($id) {
        $user = Auth::user();
        $check = CheckIn::where('uuid',$id)->firstOrFail();
        if($check->status == 'approved') {
            $check->status = 'staff_approved';
            $check->check_in = date('H:i:s');
        }
        else {
            $check->status = 'approved';

        }
        
        $check->save();
        return redirect()->back()->with('message','Visitor Approved Successfully');
        return $check;
    }
    public function checkout($id) {
        $user = Auth::user();
        $check = CheckIn::where('uuid',$id)->firstOrFail();
      
            $check->check_out = date('H:i:s');
       
            $check->status = 'complete';

        $check->save();
        return redirect()->back()->with('message','Visitor Has Been Checked Out');
        return $check;
    }
    public function checkpass(Request $request) {
        $data['companies'] = User::where('user_type','admin')->get();
        $data['pass_id'] = $request->pass_id;
        $data['user'] = Auth::user();
        $data['submit'] = 'submit';
        $data['checkin'] = $checkin =  CheckIn::where('pass_id',$request->pass_id)->first();
        
        if($checkin) {
            $data['message'] = "Visitor Loaded Successfully";
            return view('visitor.index',$data)->with('message','Visitor Loaded Successfully');
        } else {
            $data['message'] = "No Visitor Found";
            return view('visitor.index  ',$data)->with('message','No Visitor Found');

        }
    }
   

}
