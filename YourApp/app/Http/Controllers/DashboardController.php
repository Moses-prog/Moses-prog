<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Sample data - we'll replace this with real data later
        $totalReferrals = 150;
        $totalEarnings = '$2,500';

        $chartData = [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            'data' => [65, 59, 80, 81, 56, 55],
        ];

        return view('dashboard', compact('totalReferrals', 'totalEarnings', 'chartData'));
    }
}
