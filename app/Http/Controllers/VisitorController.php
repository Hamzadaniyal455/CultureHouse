<?php

namespace App\Http\Controllers;

use App\Models\VisitInfo;
use App\Models\DependentsVisitInfo;
use App\Models\Visitor;
use Illuminate\Http\Request;


class VisitorController extends Controller
{

    public function checkRegistered(Request $request) {
        $phone = $request->input('phone');
        $visitor = Visitor::where('phone', $phone)->first();
        if(!empty($visitor)){
            return response()->json(['code' => '1', 'message' => 'Already Registered.']);
        }else{
            return response()->json(['code' => '0', 'message' => 'Not Registered.']);
        }
    }

    public function saveVisitInfo()
    {
        $visitor = session('visitor');
        if(!empty($visitor)){
            $visitInfo = VisitInfo::create([
                'visitor_id' => $visitor->id,
                'date' => now()->toDateTimeString(),
            ]);
            $dependents = session('dependents');
            if(!empty($dependents)){
                foreach($dependents as $dependent){
                    $dependentVisitInfo = DependentsVisitInfo::create([
                        'visit_id' => $visitInfo->id,
                        'dependent_id' => $dependent,
                    ]);
                }
            }
        }
        
        return redirect()->route('login_successful');
    }

    public function saveVisitor(Request $request){
        $data = $request->all();
        $name = $data['name'];
        $type = $data['type'];
        $nationality = $data['nationality'] == '' ? 'saudi' : $data['nationality'];
        $id_number = $data['id_number'];
        $gender = $data['gender'];
        $phone = $data['phone'];
        $visitor = Visitor::create([
            'name' => $name,
            'type' => $type,
            'nationality' => $nationality,
            'id_number' => $id_number,
            'gender' => $gender,
            'phone' => $phone,
        ]);

        session(['visitor' => $visitor]);

        return response()->json([
            'code' => '1',
            'message' => 'Visitor Added Successfully.',
            'visitor_id' => $visitor->id,
        ]);
        
    }

}
