<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use app\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{
    public function index()
    {
        $collection = User::get();
        return view('admin.user.index', ['collection' => $collection]);
    }

    public function view($id)
    {
        // $user = User::where('id', $id)->first();
        $user = User::find($id);
        // dd($user);
        return view('admin.user.view', compact('user'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function edit()
    {
        return view('admin.user.view');
    }

    public function store(Request $request)
    {
        $this->validate($request,[ 
            'first_name' => ['required'],
            'last_name' => ['required'],
            'username' => ['required'],
            'email' => ['required'],
            'image' => ['required', 'image'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]); 
        

        $user = new User();
        $user -> first_name = $request -> first_name;
        $user -> last_name = $request -> last_name;
        $user -> username = $request -> username;
        $user -> email = $request -> email;
        $user -> phone = $request -> phone;
        $user -> photo = $request -> image;
        $user -> password = Hash::make($request -> password); 
        $user -> created_at = Carbon::now() ->toDateString();
        $user -> creator = Auth::user()->id;
        $user -> save();


        $user -> slug =  $user -> id.uniqid(10);
        $user -> save();

        if($request -> hasFile('image')){
            $user -> photo = Storage::put('uploads/user', $request -> file('image'));
            $user -> save();
        }

         
        return redirect()-> route('admin_user_view', $user->id);
        // dd($request->all());re
       }

    public function update(Request $request)
    {
        //function_body
    }

}
