<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Department;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;


class DashboardController extends Controller
{
    //
    public function index() {
        $data['user'] = $user = Auth::user();
        if($user->user_type == 'security') {
            return redirect()->route('security_dashboard');
        }
        elseif($user->user_type == 'admin') {
            return view('dashboard.index',$data);
        }
        elseif($user->user_type == 'visitor') {
         $data['user'] = Auth::user();
            return view('visitor.index',$data);
        }
        else {
            return redirect()->route('staff_dashboard');

        }
    }
    public function departments() {
        $data['user'] = $user = Auth::user();
        if($user->hasPermissionTo('create Department')) {

            $data['departments'] = Department::where('company_id',$user->company_id)->latest()->get();
            return view('dashboard.department',$data);
        } else {
            return redirect()->back();
        }
    }
    public function add_department(Request $request) {
        $data = $request->all();
        $user = Auth::user();
        $data['uuid'] = Str::uuid();
        $data['company_id'] = $user->uuid;
        $check = Department::where('company_id',$user->uuid)->where('name',$request->name)->get();
        
        if($check->isEmpty()) {
            $department = Department::create($data);
            return $department;
           
        }
        else {
            return 'duplicate';
          
        }

    }
    public function update_department(Request $request) {
       
        $user = Auth::user();
        $department = Department::where('uuid',$request->id)->firstOrFail();
        $check = Department::where('company_id',$user->uuid)->where('name',$request->name)->get();
        if($check->isEmpty()) {
            $department->name = $request->name;
            $department->save();
     
            return $department;
           
        }
        else {
            return 'duplicate';
          
        }
       
    }
    public function delete_department(Request $request) {
        $department = Department::where('uuid',$request->id)->firstOrFail();
        $department->delete();
    }
    public function staffs() {
        $data['user'] = $user = Auth::user();
        if($user->user_type == 'admin') {
            $data['departments'] = Department::where('company_id',$user->company_id)->get();
          
            $data['staffs'] = User::where('company_id',$user->company_id)->get();
            return view('dashboard.staff',$data);
        }
        else {
            if($user->hasPermissionTo('create Staff')) {

                $data['departments'] = Department::where('company_id',$user->company_id)->where('uuid',$user->department_id)->get();
               
                $data['staffs'] = User::where('company_id',$user->company_id)->where('department_id',$user->department_id)->get();
                return view('dashboard.staff',$data);
            } else {
                return redirect()->back();
            }
        }
        
      
    }
    public function add_staff(Request $request) {
        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'department' => ['required'],

            // 'phone' => ['required', 'unique:users'],
            'role' => ['required'],

            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = Auth::user();
        $uuid = Str::uuid();
        $department = Department::where('uuid',$request->department)->firstOrFail();
        if($department->name == 'Security Department') {
            $new_user = User::create([
                'email' => $request->email,
                'uuid' => $uuid,
                'name' => $request->name,
                'department_id' => $request->department,
                'role' => $request->role,
                'company_id' => $user->uuid,
                'company_type' => $user->company_type,
                'company_size' => $user->company_size,
                'user_type' => 'security',
                'password' => Hash::make('ABCD123'),
    
            ]);
        }
        else {
            $new_user = User::create([
                'email' => $request->email,
                'uuid' => $uuid,
                'name' => $request->name,
                'department_id' => $request->department,
                'role' => $request->role,
                'company_id' => $user->uuid,
                'company_type' => $user->company_type,
                'company_size' => $user->company_size,
                'user_type' => 'staff',
                'password' => Hash::make('ABCD123'),
    
            ]);
        }
     
        $pp = $new_user->department->name;
        return array($new_user,$pp);
    }
    public function edit_staff(Request $request) {
        $staff = User::where('uuid',$request->id)->firstOrFail();
       
        return $staff;
    }
   
    public function update_staff(Request $request) {
        $staff = User::where('uuid',$request->id)->firstOrFail();
        $staff->name = $request->name;
        $staff->role = $request->role;
        $staff->department_id = $request->department_id;
        $staff->save();
        $pp = $staff->department->name;
        
        return array($staff,$pp);
    }
    public function delete_staff(Request $request) {
        $id = $request->id;
        $user = User::where('uuid',$request->id)->firstOrFail();
        $user->delete();
        return true;
    }
    public function permissions() {
       
        $data['roles'] = Role::all();
        $data['user'] = Auth::user();
        $data['departments'] = Department::all();
        $data['staffs'] = User::all();
        $data['permissions'] = Permission::all();
        return view('dashboard.permission',$data);
    }
    public function billing() {
       
        $data['roles'] = Role::all();
        $data['user'] = Auth::user();
        $data['departments'] = Department::all();
        $data['staffs'] = User::all();
        $data['permissions'] = Permission::all();
        return view('dashboard.billing',$data);
    }
    public function role($uuid) {
        $data['roles'] = Role::all();
        $data['user'] = User::where('uuid',$uuid)->firstOrFail();
        $data['departments'] = Department::all();
        $data['staffs'] = User::all();
        $data['permissions'] = Permission::all();
        return view('dashboard.permission',$data);
    }
    public function set_permission(Request $request) {
        $user = User::where('uuid',$request->user_id)->firstOrFail();
        $all_permissions = Permission::all()->pluck('name');
    
        foreach($all_permissions as $r_perm) {
            $user->revokePermissionTo($r_perm);
          
        }
       
        foreach($request->permissions as $permission) {
            $user->givePermissionTo($permission);
        }
        return redirect()->back()->with('message','Permission granted successfully!');
    }
}
