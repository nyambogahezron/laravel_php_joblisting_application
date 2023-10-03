<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jobListing;
use Illuminate\Validation\Rule;

class createListingController extends Controller
{
    //show create listing form
    public function create()
    {
        return view('listing.create');
    }
    //create listing
    public function store(Request $request)
    {

        // dd($request->all());

        $formFields = $request->validate([
            'company' => ['required', Rule::unique('job_listings', 'company')],
            'title' => 'required',
            'industry' => 'required',
            'experience_level' => 'required',
            'dateline' => ['required', 'date'],
            // 2019-05-01 00:00:00
            'jobType' => 'required',
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'tags' => 'nullable',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // $formFields['user_id'] = auth()->id();

        jobListing::create($formFields);

        return redirect('/')->with("message", "Listing Created Successfully!");
    }
}