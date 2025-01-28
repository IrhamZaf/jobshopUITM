<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use Illuminate\Http\Request;

class JobPostingController extends Controller
{
    public function index()
    {
        $jobPostings = JobPosting::with('user')->latest()->paginate(10);
        return view('job-postings.index', compact('jobPostings'));
    }

    public function create()
    {
        return view('job-postings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'employment_type' => 'required|in:full-time,part-time,contract',
            'job_description' => 'required|string',
            'location' => 'required|string|max:255',
            'salary_min' => 'required|numeric|min:0',
            'salary_max' => 'required|numeric|gt:salary_min',
            'status' => 'required|in:open,closed,on-hold',
        ]);

        $validated['user_id'] = auth()->id();
        JobPosting::create($validated);

        return redirect()->route('job-postings.index')
            ->with('success', 'Job posting created successfully.');
    }

    public function show(JobPosting $jobPosting)
    {
        return view('job-postings.show', compact('jobPosting'));
    }

    public function edit(JobPosting $jobPosting)
    {
        return view('job-postings.edit', compact('jobPosting'));
    }

    public function update(Request $request, JobPosting $jobPosting)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'employment_type' => 'required|in:full-time,part-time,contract',
            'job_description' => 'required|string',
            'location' => 'required|string|max:255',
            'salary_min' => 'required|numeric|min:0',
            'salary_max' => 'required|numeric|gt:salary_min',
            'status' => 'required|in:open,closed,on-hold',
        ]);

        $jobPosting->update($validated);

        return redirect()->route('job-postings.index')
            ->with('success', 'Job posting updated successfully.');
    }

    public function destroy(JobPosting $jobPosting)
    {
        $jobPosting->delete();

        return redirect()->route('job-postings.index')
            ->with('success', 'Job posting deleted successfully.');
    }

    public function studentIndex()
    {
        $jobs = JobPosting::with('user')
            ->where('status', 'open')
            ->latest()
            ->paginate(12); // Show 12 jobs per page (4 rows of 3)
        
        return view('students.job-list', compact('jobs'));
    }

    public function studentShow(JobPosting $jobPosting)
    {
        // Ensure the job is open
        if ($jobPosting->status !== 'open') {
            abort(404);
        }
        
        return view('students.jobpreview', compact('jobPosting'));
    }

    public function apply(JobPosting $jobPosting, Request $request)
    {
        $validated = $request->validate([
            'resume_id' => 'required|exists:resumes,id',
            'cover_letter' => 'nullable|string',
        ]);

        // Create the job application
        $jobPosting->applications()->create([
            'user_id' => auth()->id(),
            'resume_id' => $validated['resume_id'],
            'cover_letter' => $validated['cover_letter'],
        ]);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }

    public function companyJobList()
    {
        // Assuming you have a way to get the company ID or user ID
        $jobs = JobPosting::where('user_id', auth()->id())->get(); // Adjust the query as needed

        return view('company.joblist', compact('jobs'));
    }
}
