<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class BackendController extends Controller
{
    //
    public function index(){
       
        return view('backend.pages.index');
    } 
    public function dashboard(){
        return view('backend.pages.dashboard-sass');
    }

    public function auth_login_2(){
        return view('backend.pages.auth-login-2');
    }

    public function auth_register_2(){
        return view('backend.pages.auth-register-2');
    }


}
