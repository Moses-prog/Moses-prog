<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\SocialService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = Auth::user()->orders;
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $services = SocialService::all();
        return view('orders.create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:social_services,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $service = SocialService::findOrFail($request->service_id);
        $totalPrice = ($request->quantity / 1000) * $service->price_per_1000;

        Order::create([
            'user_id' => Auth::id(),
            'social_service_id' => $request->service_id,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
        ]);

        return redirect()->route('orders.index')->with('success', 'Order placed successfully!');
    }

    public function show(Order $order)
    {
        $this->authorize('view', $order);
        return view('orders.show', compact('order'));
    }
}