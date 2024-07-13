<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $query = $request['q'];
        $jobs = Job::where('title', 'like', '%' . $query . '%')->get();

        return view('jobs.results', [
            'jobs' => $jobs
        ]);
    }
}
