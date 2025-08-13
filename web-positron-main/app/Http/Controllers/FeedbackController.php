<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        Feedback::create([
            'name'       => $request->name,
            'message'    => $request->message,
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent')
        ]);

        return response()->json(['success' => true]);
    }
}
