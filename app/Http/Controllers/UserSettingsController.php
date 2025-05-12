<?php

namespace App\Http\Controllers;

use App\Models\UserSetting;
use Illuminate\Http\Request;

class UserSettingsController extends Controller
{
    // Show the settings form for the logged-in user
    public function index()
    {
        // Get the settings for the logged-in user (if exists)
        $settings = UserSetting::firstOrCreate(['user_id' => auth()->user()->id]);

        return view('settings.index', compact('settings'));
    }

    // Save or update the user's settings
    public function update(Request $request)
    {
        $request->validate([
            'monthly_budget' => 'required|numeric|min:0',
            'notification_threshold' => 'required|integer|min:1|max:100',
        ]);

        $settings = UserSetting::updateOrCreate(
            ['user_id' => auth()->user()->id],
            [
                'monthly_budget' => $request->monthly_budget,
                'notification_threshold' => $request->notification_threshold,
            ]
        );

        return redirect()->route('settings.index')->with('success', 'Settings updated successfully!');
    }
}
