<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
</head>
<body>
    <h1>Order Details</h1>

    <div>
        <strong>Order ID:</strong> {{ $order->id }}
    </div>
    <div>
        <strong>Service:</strong> {{ $order->socialService->name }}
    </div>
    <div>
        <strong>Quantity:</strong> {{ $order->quantity }}
    </div>
    <div>
        <strong>Total Price:</strong> ${{ $order->total_price }}
    </div>
    <div>
        <strong>Status:</strong> {{ $order->status }}
    </div>
</body>
</html>