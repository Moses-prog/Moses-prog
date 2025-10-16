<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BalanceController extends Controller
{
    public function index()
    {
        return view('balance');
    }

    public function deposit(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
        ]);

        $user = Auth::user();
        $user->balance += $request->amount;
        $user->save();

        return redirect()->route('balance.index')->with('success', 'Deposit successful.');
    }

    public function withdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
        ]);

        $user = Auth::user();

        if (!$user->is_affiliate) {
            return redirect()->route('balance.index')->with('error', 'Only affiliates can withdraw.');
        }

        if ($user->balance < $request->amount) {
            return redirect()->route('balance.index')->with('error', 'Insufficient funds.');
        }

        $user->balance -= $request->amount;
        $user->save();

        return redirect()->route('balance.index')->with('success', 'Withdrawal successful.');
    }
}
