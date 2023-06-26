<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show all listings
    public function index()
    {
        // $request = request()
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    // Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Show Create Form
    public function create()
    {
        return view('listings.create');
    }


    //Store Listing Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => [Rule::unique('listings', 'company'), 'required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['email', 'required'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        Listing::create($formFields);

        // Session::flash('message', 'Listing Created'); ==

        return redirect('/')->with('message', 'Listing created successfully');
    }
}
