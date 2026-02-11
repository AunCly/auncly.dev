<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnthosStoreMediaController extends Controller
{

    public function __invoke(Request $request)
    {
        $request->validate([
            'token' => 'required|string|in:'.config('app.anthos_token'),
            'user_id' => 'required',
            'flower_id' => 'required',
            'media' => 'required|file|mimes:jpg,jpeg,png',
        ]);

        $file = $request->file('media');
        $path = $file->store('anthos/'.$request->user_id.'/'.$request->flower_id, 'public');

        return response()->json([
            'message' => 'Media uploaded successfully',
            'path' => config('app.url').'/storage/'.$path
        ], 201);

    }
}
