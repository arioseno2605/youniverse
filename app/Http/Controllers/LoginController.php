<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{


	public function logoutPost(){
        Session::flush();
        return redirect('/')->with('alert','Kamu sudah logout');
    }
public function viewLogin()
    {
    	if(!Session::get('login')){
    		//masuk sini
    		return view('login');

        }
        else{
        	//kalo udah masuk sini
            if (!Session::get('id')) {
                return redirect('index');
            }else{
                return redirect('/');
            }
        	         
        }
    	
    }

    public function loginPost(Request $request)
    {
    	$username = $request->username;
    	$pass = $request->pass;

    	$data = \App\Admin::where('username',$username)->first();
    	if($data){
    		//ini juga sama untuk mengecek + mentranslate password yg udah di brcypt

    			//ini untuk mengambil data si user yg udah di cek terus di jadiin publik atau global
    			Session::put('id',$data->id);
    			Session::put('username',$data->username);
    			Session::put('password',$data->password);
				//ini untuk login paling penting
    			Session::put('login',TRUE);
    			//ini untuk mengarahkan ke halaman home
    			return redirect('index')->with('alert-success','Kamu berhasil Login');;
    		}else{
        	//ini juga kalo salah
            return redirect('login')->with('alert','Password atau Username, Salah!');
        }

    }


}
