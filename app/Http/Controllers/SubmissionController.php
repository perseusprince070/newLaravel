<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessSubmission;
use App\Http\Requests\SubmissionRequest;

class SubmissionController extends Controller
{
    public function store(SubmissionRequest $request)
    {   
        dispatch(new ProcessSubmission($request->validated()));
        return response()->json(['message' => 'Submission received and is being processed.'], 202);
    }
}
