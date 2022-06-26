<?php

namespace App\Http\Controllers;

use App\City;
use App\Guest;
use App\Admin;
use App\Province;
use App\Rules\MatchOldPassword;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index()
    {
        return view ('index');
    }

    public function changePasswordPost(Request $request){
 
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        Admin::first()->fill(['password'=> Hash::make($request->new_password)])->save();
   
          return redirect('index')->with('success', 'Password successfully changed!');
        }
    public function guest()
    {
        if(!Session::get('login')){
    		//masuk sini
    
            return redirect('login')->with('alert','Kamu harus login dulu');
        } else {
            $isExits = Province::exists() && City::exists();
            if (!$isExits) {
                $client = new \GuzzleHttp\Client();
                $response = $client->get('https://d.kapanlaginetwork.com/banner/test/province.json');
                $responseProvince = json_decode($response->getBody(), true);
                Province::upsert($responseProvince, ['kode', 'nama']);
                $response = $client->get('https://d.kapanlaginetwork.com/banner/test/city.json');
                $responseCity = json_decode($response->getBody(), true);
                City::upsert($responseCity,  ['kode', 'nama']);
            }
            $status = "OPN";
            $id = Session::get('id');
  
            $data['guest'] = Guest::where([
                             ['status',$status],
                             
                             ])->get();
     
        $guest = DB::table('guests')->get();


        return view('guest',$data, ['guest' => $guest]);
    }
    }
    
    public function addGuest()
    {
        if(!Session::get('login')){
            
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        $provinces = Province::get();
        $cities = City::get();
        return response()->view('addguest', compact('cities','provinces'));
    
    }
    
    public function store (Request $request)
    {

	DB::table('guests')->insert([
		'firstname' => $request->firstname,
		'lastname' => $request->lastname,
		'organization' => $request->organization,
		'address' => $request->address,
        'province' => $request->province,
        'city' => $request->city,
        'phone' => $request->phone,
        'status' => "OPN",
        
	]);
	// alihkan halaman ke halaman data catatan
	return redirect('guest')->with('alert-success','Data uploaded');
 
    }

    
    public function viewEdit($id)
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Please login first!');   
        }elseif(Session::get('id')){
            $guest = Guest::find($id)->first();
            $provinces = Province::get();
            $cities = City::get();
            return response()->view('editguest', compact('cities','provinces','guest'));
        }else{
            return redirect('guest');
        }
<<<<<<< HEAD

=======
>>>>>>> e5a4dfe040c34a5dfec83717553f249128457909
    }    

    public function editPost(Request $request, $id)
    {
<<<<<<< HEAD
      
=======
>>>>>>> e5a4dfe040c34a5dfec83717553f249128457909
        $data = Guest::find($id);
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->organization = $request->organization;
        $data->address = $request->address;
        $data->province = $request->province;
        $data->city = $request->city;
        $data->phone = $request->phone;

        //ini untuk ubah data
        $statusc = $data->save();
<<<<<<< HEAD

=======
>>>>>>> e5a4dfe040c34a5dfec83717553f249128457909
        //ini untuk pengecekan
        if ($statusc) {
            //kalo berhasil
            return redirect('guest')->with('alert-success','Edit Success');
        } else {
            //kalo gagal
            return redirect('guest')->with('alert-error','Edit Failed');
        }        
    }


    public function delete($id)
    {
        //ini untuk mengambil data  lelang berdaasarkan id
        $data = Guest::find($id);
        //ini untuk mengubah status di tabel lelang
        $data->status = "DEL";

        //ini untuk ubah data
        $statusc = $data->update();

        //ini untuk pengecekan
        if ($statusc) {
            //kalo berhasil
            return redirect('guest')->with('alert-success','Kamu berhasil Register');
        } else {
            //kalo gagal
            return redirect('guest')->with('alert-error','register gagal');
        }

    }


    
}
