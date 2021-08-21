<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Seller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthPageController extends Controller
{
    public function loginPage()
    {
        return view('authPage.login');
    }

    public function passwordReset()
    {
        return view('authPage.passwordReset');
    }

    public function register()
    {
        return view('authPage.register');
    }


    public function sellerRegistration()
    {
        return view('authPage.sellerRegistration');
    }

    public function buyerRegistration()
    {
        return view('authPage.buyerRegistration');
    }

    public function createSeller(Request $request) 
    {
        $this->validate($request, [
            'first_name'=>'required',
            'last_name'=>'required'
        ]);

        $user = new User();
        $user->name = $request->first_name . " " . $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->assignRole('seller');
        $user->syncRoles('seller');

        $seller = new Seller();
        $seller->first_name = $request->first_name;
        $seller->last_name = $request->last_name;
        $seller->seller_type = $request->seller_type;
        $seller->company_name = $request->company_name;
        $seller->contact_number = $request->contact_number;
        $seller->email = $request->email;
        $seller->address = $request->address;
        $seller->user_id = $user->id;
        $seller->save();
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
    }
}
