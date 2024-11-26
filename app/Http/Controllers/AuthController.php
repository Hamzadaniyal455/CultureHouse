<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // return $request->all();
        // $validator = Validator::make($request->all(), [
        //     // 'phone' => 'required|digits:12|regex:/^[0-9]{12}$/',
        //     // 'phone' => 'required|regex:/^\+\d{10,15}$/',
        //     'phone' => 'required|regex:/^\+\d{10,15}$/',
        // ]);

        // $validated = $request->validate([
        //     'phone' => 'required|regex:/^\+\d{10,15}$/', // E.164 format validation
        // ]);



        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $phoneNumber = $request->input('phone');
        $visitor = Visitor::where('phone', $phoneNumber)->first();
        if ($visitor) {
            session(['visitor' => $visitor]);
            return response()->json([
                'code'=>'1',
                'message' => 'Logged In successfully.',
                'visitor_id' => $visitor->id,
            ]);
            // return redirect()->route('information');
            // return redirect()->route('information')->with('visitor',$visitor);
        } else {
            return response()->json([
                'code'=>'0',
                'message' => 'Phone number not found.'
            ]);
            // return redirect()->back()->with('error', 'Phone number not found.');
        }
    }
}
