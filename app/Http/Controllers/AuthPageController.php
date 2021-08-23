<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Seller;
use App\Buyer;
use App\BuyerAddress;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Contracts\Activity;

class AuthPageController extends Controller
{
    public function passwordReset()
    {
        return view('auth.passwordReset');
    }

    public function register()
    {
        return view('auth.register');
    }


    public function sellerRegistration()
    {
        return view('auth.sellerRegistration');
    }

    public function buyerRegistration()
    {
        return view('auth.buyerRegistration');
    }

    public function createSeller(Request $request) 
    {
        $this->validate($request, [
            'first_name'=>'required',
            'last_name'=>'required',
            'contact_number'=>'required',
            'email'=>'required',
            'address'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);

        $user = new User();
        $user->name = $request->username;
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

        activity('Seller Registration')->causedBy($user)->performedOn($seller)->log('New seller has registerd to the system. - Online Registration');

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
    }

    public function createBuyer(Request $request) 
    {
        $this->validate($request, [
            'first_name'=>'required',
            'last_name'=>'required',
            'contact_number'=>'required',
            'email'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);

        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->assignRole('buyer');
        $user->syncRoles('buyer');

        $buyer = new Buyer();
        $buyer->first_name = $request->first_name;
        $buyer->last_name = $request->last_name;
        $buyer->contact_number = $request->contact_number;
        $buyer->email = $request->email;
        $buyer->user_id = $user->id;
        $buyer->save();

        $buyeraddress = new BuyerAddress();
        $buyeraddress->address_line1 = $request->res_address_line1;
        $buyeraddress->address_line2 = $request->res_address_line2;
        $buyeraddress->city = $request->res_city;
        $buyeraddress->district = $request->res_district;
        $buyeraddress->zip_code = $request->res_zip_code;
        $buyeraddress->address_type = "Resident Address";
        $buyeraddress->buyer_id = $buyer->id;
        $buyeraddress->save();

        activity('Buyer Registration')->causedBy($user)->performedOn($buyer)->log('New buyer has registerd to the system. - Online Registration');

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
    }
}
