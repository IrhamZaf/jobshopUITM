<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function filter(Request $request)
    {
        try {
            $query = JobPosting::with('user');

            if ($request->filled('search')) {
                $query->where(function($q) use ($request) {
                    $q->where('title', 'like', '%' . $request->search . '%')
                      ->orWhereHas('user', function($q) use ($request) {
                          $q->where('company_name', 'like', '%' . $request->search . '%');
                      });
                });
            }

            if ($request->filled('location')) {
                $query->where('location', 'like', '%' . $request->location . '%');
            }

            if ($request->filled('type') && $request->type !== 'all') {
                $query->where('employment_type', $request->type);
            }

            $jobs = $query->get();

            return response()->json($jobs);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while filtering jobs'], 500);
        }
    }
}
