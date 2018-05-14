<?php

namespace App\Http\Controllers;

use App\Models\Listing;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $listings = Listing::all(['id', 'address', 'title', 'price_per_night']);

        return view('app')->with([
            'data' => $listings,
        ]);
    }

}
