<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Mail\JobMail;
use Illuminate\Support\Facades\Mail;


class JobController extends Controller
{
    public function index () {
        $jobs = Job::with('company')->latest()->simplePaginate(30);
        return view('jobs.index', ['jobs'=> $jobs]);
    }

    public function create () {
        // returns create form
        return view('jobs.create');
    }

    public function edit (Job $job) {        
        // returns edit form
        return view('jobs.edit', ["job" => $job]);
    }

    public function store () {
        // Validation goes here...
        request()->validate([
            "title" => ['required', 'string', 'max:255', 'min:3'],
            "salary" => ['required', 'numeric', 'max_digits:12', 'min_digits:2']
        ]);

        // Create Job with data
        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'company_id' => 1,
        ]);

        // Send a Confirmation Email
        Mail::to("abror2142@gmail.com")->send(
            new JobMail($job)
        );

        // Redirect User to jobs page.
        return redirect('/jobs');
    }

    public function show (Job $job) {
        return view('jobs.show', ["job" => $job]);
    }
 
    public function update (Job $job) {
        // Authorize the user 

        // Validate Input
        request()->validate([
            "title" => ['required', 'string', 'max:255', 'min:3'],
            "salary" => ['required', 'numeric', 'max_digits:12', 'min_digits:2']
        ]);

        // Update the job
        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        // Redirect user
        return redirect('/jobs/'. $job->id);
    }

    public function destroy(Job $job) {
        // Authorize user

        // Delete job
        $job->delete();

        // Redirect to Jobs list page
        return redirect('/jobs/');
    }
}
