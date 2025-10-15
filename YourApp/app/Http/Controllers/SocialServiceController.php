<?php

namespace App\Http\Controllers;

use App\Models\SocialService;
use Illuminate\Http\Request;

class SocialServiceController extends Controller
{
    public function index()
    {
        $services = SocialService::all();
        return view('services.index', compact('services'));
    }
}