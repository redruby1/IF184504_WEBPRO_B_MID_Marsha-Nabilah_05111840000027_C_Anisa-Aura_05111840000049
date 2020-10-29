<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use DB;

class UserController extends Controller
{
    public function signup(request $request) {
        // print_r($request->input());

        $username=$request->input('username');
        $name=$request->input('name');
        $email=$request->input('email');
        $telp=$request->input('telp');
        $alamat=$request->input('alamat');
        $password=$request->input('password');

        $data=DB::insert('insert into admin(username,name,email,no_telp,alamat,password) 
            values(?,?,?,?,?,?)',[$username,$name,$email,$telp,$alamat,$password]);

            if($data) {
                return redirect('/login');
            }
            else {
                return redirect('/register');
            }
    }

    public function signin(request $request) {
        // return "success";

        $username=$request->input('username');
        $password=$request->input('password');

        $data=DB::select('select username from admin where username=? and password=?',[$username,$password]);
    
        if($data) {
            return redirect('/homepage');
        }
        else {
            return redirect('/login');
        }
    }
}

?>