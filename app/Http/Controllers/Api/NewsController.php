<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'date' => 'nullable|string',
        'image_header_by' => 'required|string',
        'description' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif', // Adjust max size as needed
    ]);

    // Store the image in the storage/app/public directory
    $imagePath = $request->file('image')->store('public/images');

    // Get the filename
    $filename = basename($imagePath);

    // Create the publication item in the database
    $newsItem = News::create([
        'date' => $request->date,
        'image_header_by' => $request->image_header_by,
        'description' => $request->description,
        'image' => $filename, // Store the filename in the database
    ]);

    // Return the created publication item
    return $newsItem;
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
