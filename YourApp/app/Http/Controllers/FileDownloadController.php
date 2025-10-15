<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class FileDownloadController extends Controller
{
    public function download($filename)
    {
        // Check if the file exists in the public directory
        if (file_exists(public_path($filename))) {
            return response()->download(public_path($filename));
        }

        // Or, if you want to download from the storage directory
        // if (Storage::disk(\'local\')->exists($filename)) {
        //     return Storage::disk(\'local\')->download($filename);
        // }

        // If the file doesn\'t exist, return a 404 error
        abort(404);
    }
}
