<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Profile;

class MainController extends Controller
{
    public function show() : View
    {
        $profile = Profile::find(1);
        $courses = $profile->courses;
        $experiences = $profile->experiences;
        $skills = $profile->skills;
        $projects = $profile->projects;

        foreach ($projects as $project)
        {
            $software = $project->software;
        }

        return view('welcome', compact('profile', 'courses', 'experiences', 'skills', 'projects'));
    }
}
