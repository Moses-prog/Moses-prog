<!DOCTYPE html>
<html>
<head>
    <title>Our Services</title>
</head>
<body>
    <h1>Our Social Media Services</h1>

    <table>
        <thead>
            <tr>
                <th>Service</th>
                <th>Price per 1000</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    <td>${{ $service->price_per_1000 }}</td>
                    <td><a href="{{ route('orders.create', ['service_id' => $service->id]) }}">Order</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>