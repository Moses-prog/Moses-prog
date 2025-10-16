<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Generate the referral link
        $referralLink = url('/?ref=' . $user->id);

        // Sample data (with Naira currency) - we'll replace this with real data later
        $totalReferrals = 150;
        $totalEarningsInNaira = '₦1,250,000'; 

        $chartData = [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            'data' => [65, 59, 80, 81, 56, 55],
        ];

        return view('dashboard', compact('totalReferrals', 'totalEarningsInNaira', 'chartData', 'referralLink'));
    }
}
