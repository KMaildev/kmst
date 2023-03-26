<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function show($id)
    {
        $country = Country::findOrFail($id);
        $jobs = Job::get()->where('countrie_id', $id);
        return view('job.show', compact('country', 'jobs'));
    }
}
