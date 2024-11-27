<?php

namespace App\Http\Controllers;

use App\Models\Dependent;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        return view('pages.home');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        // $laravel =  session(['step'=>$step]);
        // dd($laravel);
        return view('pages.register');
    }

    public function information()
    {
        $visitor = session('visitor');
        return view('pages.basic_information', compact('visitor'));
    }

    public function information_reg()
    {
        $visitor = session('visitor');
        return view('pages.basic_information_reg', compact('visitor'));
    }

    public function dependents()
    {
        $visitor = session('visitor');
        $dependents = Dependent::where('visitor_id',$visitor->id)->get();
        return view('pages.dependents',compact('dependents', 'visitor'));
    }

    public function dependents_reg()
    {
        $visitor = session('visitor');
        $dependents = Dependent::where('visitor_id',$visitor->id)->get();
        return view('pages.dependents_reg',compact('dependents', 'visitor'));
    }

    public function checkDependents(Request $request) {
        session(['dependents'=>$request->input('dependents')]);
        return redirect()->route('visit_info.save');
    }

    public function checkDependentsReg(Request $request) {
        // session(['dependents'=>$request->input('dependents')]);
        return view('pages.basic_information_reg');
        // return redirect()->route('visit_info.save');
    }

    public function loginSuccessful() {
        return view('pages.login_successful');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|regex:/^\+\d{10,15}$/', // E.164 format validation
        ]);

        // Logic to authenticate or process the phone number
        return response()->json(['message' => 'Phone number logged in successfully']);
    }
}
