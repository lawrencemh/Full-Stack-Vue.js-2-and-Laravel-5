<?php

namespace App\Http\Controllers\Api;

use App\Models\Listing;
use App\Http\Controllers\Controller;

class ListingsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param \App\Models\Listing $listing
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Listing $listing)
    {
        return response()->json($listing);
    }

}
