<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the job applications.
     */
    public function index()
    {
        $applications = JobApplication::with(['user', 'jobPosting'])->get();
        return response()->json($applications);
    }

    /**
     * Store a newly created job application.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'job_posting_id' => 'required|exists:job_postings,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $application = JobApplication::create($validated);
        return response()->json($application, Response::HTTP_CREATED);
    }

    /**
     * Display the specified job application.
     */
    public function show(JobApplication $jobApplication)
    {
        return response()->json($jobApplication->load(['user', 'jobPosting']));
    }

    /**
     * Update the specified job application.
     */
    public function update(Request $request, JobApplication $jobApplication)
    {
        $validated = $request->validate([
            'job_posting_id' => 'sometimes|exists:job_postings,id',
            'user_id' => 'sometimes|exists:users,id',
        ]);

        $jobApplication->update($validated);
        return response()->json($jobApplication);
    }

    /**
     * Remove the specified job application.
     */
    public function destroy(JobApplication $jobApplication)
    {
        $jobApplication->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
