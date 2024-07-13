<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Employer;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->simplePaginate(10);
        $featuredJobs = Job::where('featured', true)->latest()->simplePaginate(10);
        $tags = Tag::all();

        return view('jobs.index', [
            'jobs' => $jobs,
            'featuredJobs' => $featuredJobs,
            'tags' => $tags
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.post-job');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        $jobData = $request->validated();

        if ($request->has('featured')) {
            $jobData['featured'] = $request['featured'];
        }

        $employer = Auth::user()->employer;

        if (!$employer) {
            return redirect()->route('home')->with('error', 'You are not authorized to make this action');
        }

        $job = $employer->jobs()->create($jobData);

        if ($request->has('tags')) {
            foreach (explode(',', $request['tags']) as $tag) {
                $job->tag($tag);
            };
        }

        return redirect()->route('home')->with('success', 'Job posted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
