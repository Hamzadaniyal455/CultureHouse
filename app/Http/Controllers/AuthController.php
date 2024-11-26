<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|digits:12|regex:/^[0-9]{12}$/',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $phoneNumber = $request->input('phone');
        $visitor = Visitor::where('phone', $phoneNumber)->first();

        if ($visitor) {
            return redirect()->route('information')->with('visitor',$visitor);
        } else {
            return redirect()->back()->with('error', 'Phone number not found.');
        }
    }
}
