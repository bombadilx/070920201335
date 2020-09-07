<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome', ['data' => Address::all()]);

    }

    public function handler(Request $req)
    {
        $address = new Address;

        $address->name = $req->input('name');
        $address->city = $req->input('city');
        $address->area = $req->input('area');
        $address->street = $req->input('street');
        $address->house = $req->input('house');
        $address->information = $req->input('information');

        $address->save();

        return redirect()->route('main');
    }

}
