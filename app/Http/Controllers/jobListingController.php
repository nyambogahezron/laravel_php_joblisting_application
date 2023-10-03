<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\jobListing;

class jobListingController extends Controller
{

    //show all listings
    public function index()
    {
        return view('listings.index', [
            //filter using the tags
            //filter using the search

            "listings" => jobListing::latest()->filter(request(['tag', 'search']))->get()
            // "listings" => jobListing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);

    }
    //show listing create form 
    public function create()
    {
        return view('listing.create');
    }






    // Update Listing Data
    public function update(Request $request, jobListing $listing)
    {
        // Make sure logged in user is owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing updated successfully!');
    }

    // Delete Listing
    public function destroy(jobListing $listing)
    {
        // Make sure logged in user is owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        // if($listing->logo && Storage::disk('public')->exists($listing->logo)) {
        //     Storage::disk('public')->delete($listing->logo);
        // }
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }

    // Manage Listings
    public function manage(jobListing $listing)
    {
        return view('listings.manage', ['listings' => auth()->user()->jobListing->get()]);
    }
}