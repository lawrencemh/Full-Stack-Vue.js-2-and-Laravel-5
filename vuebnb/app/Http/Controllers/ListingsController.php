<?php

namespace App\Http\Controllers;

use App\Models\Listing;

class ListingsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param \App\Models\Listing $listing
     *
     * @return \Illuminate\View\View
     */
    public function show(Listing $listing)
    {
        return view('app')->with(['listing' => $listing]);
    }
}
