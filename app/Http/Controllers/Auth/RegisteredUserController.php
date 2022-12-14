<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Category;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Permission;


class RegisteredUserController extends Controller
{

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
      

        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'address' => ['required'],

            // 'phone' => ['required', 'unique:users'],
            // 'state' => ['required'],

            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $uuid = Str::uuid();
        // dd($uuid, $request->all());
       $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone ?? "",
            'uuid' => $uuid,
            'company_id' => $uuid,
            'user_type' => $request->user_type,
            'company_size' => $request->company_size,
            'company_type' => $request->company_type,
            'password' => Hash::make($request->password),
        ]);

        // event(new Registered($user));
        $email = $request->email;

        $data = array('name' => $request->name);
        // Mail::send('mail.welcome', $data, function($message) use($email) {
        //     $message->to($email, '')->subject
        //        ('Welcome to CTtaste');
        //     $message->from('support@cttaste.com','Pelumi');
        //  });
        $meta['uuid'] = Str::uuid();
        $meta['company_id'] = $user->uuid;
        $meta['name'] = 'Security Department';
        $all_permissions = Permission::all()->pluck('name');
    
        foreach($all_permissions as $r_perm) {
            $user->givePermissionTo($r_perm);
          
        }
        Department::create($meta);
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
    public function logout()
    {
        Auth::logout();
       // return Redirect::route('login');
       Session::flush();

        return Redirect::away('login');
    }
}
