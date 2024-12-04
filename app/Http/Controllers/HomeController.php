<?php

namespace App\Http\Controllers;

use App\Models\Dependent;
use Illuminate\Http\Request;
use App\Http\Controllers\VisitorController;
use App\Models\Visitor;

class HomeController extends Controller
{

    // public function home(Request $request)
    // {
    //     $language = session(['language'=>$request->input('language')]);

    //     if ($language == 'English') {
    //         return view('pages.home.engish_home');
    //     }
    //     else if ($language == 'Arabic') {
    //         return view('pages.home.arabic_home');
    //     } else {
    //         return view('pages.home.arabic_home');
    //     }
    // }

    public function home(Request $request)
    {
        if ($request->has('language')) {
            $language = $request->input('language');
        } else {
            $language = 'ar';
        }

        if (!in_array($language, ['en', 'ar'])) {
            $language = 'ar';
        }

        session(['language' => $language]);

        $view = $language === 'en' ? 'pages.home.english_home' : 'pages.home.arabic_home';

        return view($view);
    }

    public function login()
    {
        $language = session('language');
        $view = $language === 'en' ? 'pages.login.english_login' : 'pages.login.arabic_login';
        return view($view);
    }

    public function register()
    {
        // $laravel =  session(['step'=>$step]);
        // dd($laravel);
        $language = session('language');
        $view = $language === 'en' ? 'pages.register.english_register' : 'pages.register.arabic_register';
        return view($view);
    }

    public function information()
    {
        $visitor = session('visitor');
        $language = session('language');
        $views = $language === 'en' ? 'pages.basic_information.english_basic_information' : 'pages.basic_information.arabic_basic_information';
        // return $views;
        return view($views, compact('visitor'));
    }

    public function information_reg()
    {
        $visitor = session('visitor');
        $dependents = session('dependents');
        $language = session('language');
        $views = $language === 'en' ? 'pages.basic_information_reg.english_basic_information_reg' : 'pages.basic_information_reg.arabic_basic_information_reg';
        return view($views, compact('dependents', 'visitor'));
    }

    public function dependents()
    {
        $visitor = session('visitor');
        $dependents = Dependent::where('visitor_id', $visitor->id)->get();
        $language = session('language');
        $views = $language === 'en' ? 'pages.dependents.english_dependents' : 'pages.dependents.arabic_dependents';
        return view($views, compact('dependents', 'visitor'));
    }

    public function dependents_reg()
    {
        $visitor = session('visitor');
        $dependents = Dependent::where('visitor_id', $visitor->id)->get();
        session(['dependents' => $dependents]);
        $language = session('language');
        $views = $language === 'en' ? 'pages.dependents_reg.english_dependents_reg' : 'pages.dependents_reg.arabic_dependents_reg';
        return view($views, compact('dependents', 'visitor'));
    }

    public function checkDependents(Request $request)
    {
        session(['dependents' => $request->input('dependents')]);
        return redirect()->route('visit_info.save');
    }

    public function checkDependentsReg(Request $request)
    {
        // session(['dependents'=>$request->input('dependents')]);
        return view('pages.basic_information_reg');
        // return redirect()->route('visit_info.save');
    }

    public function loginSuccessful()
    {
        return view('pages.login_successful');
    }

    public function regSuccessful()
    {
        $language = session('language');
        $views = $language === 'en' ? 'pages.reg_successful.english_reg_successful' : 'pages.reg_successful.arabic_reg_successful';
        return view($views);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|regex:/^\+\d{10,15}$/', // E.164 format validation
        ]);

        // Logic to authenticate or process the phone number
        return response()->json(['message' => 'Phone number logged in successfully']);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('home');
    }
}
