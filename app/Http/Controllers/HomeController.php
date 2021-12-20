<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role_id;
        if($role == '1')
        {
            return view('admin');
        }
        else if($role == '2')
        {
            return view('subadmin');
        }
        else
        {
            return view('dashboard');
        }
    }
    public function addsubadmin(Request $request)
    {
        $data = new user;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->role_id = '2';
        $data->save();
        return redirect()->back();
    }
}
