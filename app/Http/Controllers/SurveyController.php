<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;

class SurveyController extends Controller
{


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'age_range' => 'required',
            'gender' => 'required',
            'satisfaction_score' => 'required|integer|min:1|max:5',
            'feedback' => 'nullable',
        ]);

        $survey = Survey::create($data);

        return response()->json([
            'message' => 'Survey berhasil disimpan',
            'data' => $survey
        ], 201);
    }
}
