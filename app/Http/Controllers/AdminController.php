<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CheckIn;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class AdminController extends Controller
{
    public function index() {
        $data['users'] = User::latest()->get();
        $data['user'] = Auth::user();
        $data['department'] = Department::latest()->get();
        $data['checkins'] = CheckIn::latest()->get();
        $data['roles'] = Role::latest()->get();
        return view('admin.index',$data);
    }
    public function create_role(Request $request) {
        
        $role = Role::create(['name' => $request->name]);
        $create = Permission::create(['name' => 'create '.$request->name]);
        $edit = Permission::create(['name' => 'edit '.$request->name]);
        $view = Permission::create(['name' => 'view '.$request->name]);
        $delete = Permission::create(['name' => 'delete '.$request->name]);

        $role->givePermissionTo([$create,$edit,$view,$delete]);
        return redirect()->back()->with('message','Role Created Successfully');
    }
    public function delete_role($id) {
        $role = Role::find($id);
       
        $permission = Permission::where('role_id',$id)->get();
        $permission->delete();
        $role->delete();
    }
}
