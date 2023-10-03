<?php

namespace App\Http\Controllers;

use App\Models\jobListing;
use Illuminate\Http\Request;

class singleJobListingController extends Controller
{
    //show single listings
    public function show(jobListing $listing)
    {
        return view('listings.show', [
            "listing" => $listing
        ]);
    }
}