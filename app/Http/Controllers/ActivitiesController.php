<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function labourActivities(Request $request)
    {
        $activities = Activities::where('types', 'labour_activities')->get();
        return view('activities.labour_activities', compact('activities'));
    }

    public function eventActivities(Request $request)
    {
        $activities = Activities::where('types', 'event_activities')->get();
        return view('activities.event_activities', compact('activities'));
    }

    public function galleryActivities(Request $request)
    {
        $activities = Activities::where('types', 'office_gallery')->get();
        return view('activities.office_gallery', compact('activities'));
    }
}
