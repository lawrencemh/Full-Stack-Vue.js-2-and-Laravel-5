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
        // Append the image attributes
        for ($i = 1; $i <= 4; $i++) {
            $listing->setAttribute("image_$i", asset("images/{$listing->id}/Image_$i.jpg"));
        }

        return response()->json($listing);
    }

}
