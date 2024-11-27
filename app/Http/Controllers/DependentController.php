<?php

namespace App\Http\Controllers;

use App\Models\Dependent;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\Depends;

class DependentController extends Controller
{
    
    public function addDependents(Request $request){
        $data = $request->all();
        $name = $data['name'];
        $year = $data['year'];
        $gender = $data['gender'];
        $visitor = session('visitor');
        // $visitor_id = $visitor->id;
        $dependent_add = Dependent::create([
            'visitor_id' => $visitor->id,
            'name' => $name,
            'birth_year' => $year,
            'gender' => $gender,
            'date' => now()->toDateTimeString(),
        ]);
        return response()->json([
            'code'=>'1',
            'message' => 'Dependent Added Successfully.'
        ]);
    }
}
