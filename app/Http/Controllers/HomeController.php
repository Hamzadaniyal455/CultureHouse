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
        return view('pages.register');
    }

    public function information()
    {
        $visitor = session('visitor');
        return view('pages.basic_information', compact('visitor'));
    }

    public function dependents()
    {
        $visitor = session('visitor');
        $dependents = Dependent::where('visitor_id', $visitor->id);
        return view('pages.dependents', compact('dependents'));
    }

    public function loginSuccessful()
    {
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
