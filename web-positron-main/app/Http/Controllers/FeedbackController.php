<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save to database
        Feedback::create($validated);

        return response()->json(['success' => true, 'message' => 'Feedback submitted successfully!']);
    }
}
