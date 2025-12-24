<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\ContactMessage;

class HomeController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        $skills = Skill::all();
        $contactMessages = ContactMessage::all(); // Not used in view, but for completeness

        return view('home', compact('experiences', 'skills', 'contactMessages'));
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create($request->all());

        return back()->with('success', 'Message sent successfully!');
    }
}
