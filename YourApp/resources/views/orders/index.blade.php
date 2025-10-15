<!DOCTYPE html>
<html>
<head>
    <title>My Orders</title>
</head>
<body>
    <h1>My Orders</h1>

    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Service</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->socialService->name }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>${{ $order->total_price }}</td>
                    <td>{{ $order->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>