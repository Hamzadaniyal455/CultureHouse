<?php

namespace App\Http\Controllers;

use App\Models\VisitInfo;
use App\Models\DependentsVisitInfo;
use Illuminate\Http\Request;


class VisitorController extends Controller
{
    public function saveVisitInfo(Request $request)
    {
        // $request->validate([
        //     'visitor_id' => 'required|exists:visitor,id',
        // ]);
        $visitor = session('visitor');
        $visitInfo = VisitInfo::create([
            'visitor_id' => $visitor->id,
            'date' => now()->toDateTimeString(),
        ]);

        // $request->validate([
        //     'visit_id' => 'required|exists:visit_info,id',
        //     'dependent_id' => 'required|exists:dependents,id',
        // ]);
        $dependents = session('dependents');
        foreach($dependents as $dependent){
            $dependentVisitInfo = DependentsVisitInfo::create([
                'visit_id' => $visitInfo->id,
                'dependent_id' => $dependent,
            ]);
        }
        return redirect()->route('login_successful');
        // return response()->json([
        //     'message' => 'Visit info saved successfully.',
        //     'visit_id' => $visitInfo->id,
        // ]);
    }

}
