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
<<<<<<< HEAD
            'message' => 'required|string',
            'email'=> 'required|string|max:255',
        ]);

        Feedback::create($validated);
    try {
      // Save to database
      Feedback::create($validated);
      return response()->json(['success' => true, 'message' => 'Feedback submitted successfully!'], 201);
  } catch (\Exception $e) {
      return response()->json(['success' => false, 'message' => 'Failed to submit feedback.'], 500);
  }
    }
}   
=======
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save to database
        Feedback::create($validated);

        return response()->json(['success' => true, 'message' => 'Feedback submitted successfully!']);
    }
}
>>>>>>> 5ad7fce (Commit)
