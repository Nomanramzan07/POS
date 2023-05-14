<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Item;
use App\Models\Sale;
use Illuminate\Support\Facades\Validator;
use Hash;
use Session;
use Illuminate\Support\Facades\Hash as FacadesHash;

class HomeController extends Controller
{
    //
    public function redirect()
    {
        $role = Auth::user()->role;
        if($role == 1)
        {
            return view('admin.home');
        }
        else
        {
            return view('dashboard');
        }
    }


    public function reg_view(){
        return view('register');
    }

    public function register(Request $request)
    {
        // dd($request->all());
        // $validator = Validator::make($request->all(),[
            $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:6|max:12'
        ]);
        // echo "<pre>";
        // print_r($request->all());
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $result = $user->save();
            if($result)
            {
                return back()->with('success','You have registered Successfully');
            }
            else{
                return back()->with('fail','Something went Wrong');
            }
    }
    public function log_view()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        // $validator = Validator::make($request->all(),[
            $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        echo "<pre>";
        print_r($request->all());

        $user = User::where('username', '=', $request->username)->first();
        if($user)
        {
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('/');
                } else{
                        return back()->with('fail', 'Password not Matches');
                      }
            // else {
            //     $request->session()->put('loginID', $user->id);
            //     return redirect('/');
            // }
             } else {
            return back()->with('fail', 'This Username is not Registered');
             }
    }

    public function view_item()
    {
        return view('admin.item');
    }

    public function add_item(Request $req)
    {
        $data = new Item;
        $data->item_name = $req->item;
        $data->save();
        return redirect()->back()->with('message','Item Added Successfully');

    }

    public function view_sale()
    {
        return view('admin.sale');
    }

    public function add_sale(Request $req)
    {
        $data = new Sale;
        $data->receipt_amount = $req->sale;
        $data->save();
        return redirect()->back()->with('message','Sale Added Successfully');

    }


}
