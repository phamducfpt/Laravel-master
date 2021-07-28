<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ControllerCustomer
{
    public function register(){
        return view('/customer/register');
    }
    public function registerSuccess(Request $request){
        $name = $request->get('name');
        $email = $request->get('email');
        $birthday = $request->get('birthday');
        $phone = $request->get('phone');
        $address = $request->get('address');
        return view('/customer/success', [
            'name' => $name,
            'email' => $email,
            'birthday' => $birthday,
            'phone' => $phone,
            'address' => $address
        ]);
    }

}
