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

            "listings" => jobListing::latest()->filter(request(['tag', 'search']))->paginate(10)
        ]);

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