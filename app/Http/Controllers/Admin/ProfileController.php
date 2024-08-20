<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function showProfile(): View
    {
        $admin = Auth::guard('admin');
        return view('admin.profile', compact('admin'));
    }

   public function edit(Request $request): View
{
    $admin = $request->admin();
    return view('admin.edit_profile', compact('admin'));
}

    /**
     * Update the admin's profile information.
     */
    public function updateProfile(ProfileUpdateRequest $request)
{
    $admin = $request->admin();

    // Update all fields from the request
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    // Update the admin's profile
    $admin->fill($request->only(['name', 'email']));

    $admin->save();

    return Redirect::route('admin/showprofile')->with('status', 'profile-updated');
}
    
}
