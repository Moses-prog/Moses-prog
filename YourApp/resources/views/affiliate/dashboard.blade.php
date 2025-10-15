<!DOCTYPE html>
<html>
<head>
    <title>Affiliate Dashboard</title>
</head>
<body>
    <h1>Welcome to your Affiliate Dashboard, {{ $user->name }}</h1>

    <h2>Your Referral Link</h2>
    <p>Share this link to earn commissions:</p>
    <input type="text" value="{{ route('register', ['ref' => $user->id]) }}" readonly>

    <h2>Your Earnings</h2>
    <p>Total Earnings: $0.00</p>
    <p>Pending Commissions: $0.00</p>
</body>
</html>