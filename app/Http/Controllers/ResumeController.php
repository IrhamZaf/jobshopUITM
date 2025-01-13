<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx,zip,png,jpg,jpeg,mp4,xls,xlsx|max:10240'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('resumes', $fileName, 'public');
            
            Resume::create([
                'user_id' => Auth::id(),
                'title' => $file->getClientOriginalName(),
                'file_path' => $filePath
            ]);

            return redirect()->back()->with('success', 'File uploaded successfully');
        }

        return redirect()->back()->with('error', 'No file uploaded');
    }

    public function destroy(Resume $resume)
    {
        if ($resume->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Unauthorized action');
        }

        Storage::disk('public')->delete($resume->file_path);
        $resume->delete();

        return redirect()->back()->with('success', 'File deleted successfully');
    }
}
