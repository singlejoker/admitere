<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    public function index(){
        return view('insert');
    }
    
    public function show(){
        $customers = customer::all();
        return view('show',['customers' => $customers]);
    }
    
    public function store(Request $request){
        $customer = new customer;
        $customer->nume = $request->nume;
        $customer->prenume = $request->prenume;
        $customer->media = $request->media;
        $customer->save();
        return redirect('show');
    }
}
