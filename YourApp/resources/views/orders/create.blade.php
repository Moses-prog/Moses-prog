<!DOCTYPE html>
<html>
<head>
    <title>Create Order</title>
</head>
<body>
    <h1>Create a New Order</h1>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        <div>
            <label for="service">Select a Service:</label>
            <select name="service_id" id="service">
                @foreach ($services as $service)
                    <option value="{{ $service->id }}" data-price="{{ $service->price_per_1000 }}">{{ $service->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" min="1" value="1000">
        </div>

        <div>
            <label for="total_price">Total Price:</label>
            <input type="text" name="total_price" id="total_price" readonly>
        </div>

        <button type="submit">Place Order</button>
    </form>

    <script>
        const serviceSelect = document.getElementById('service');
        const quantityInput = document.getElementById('quantity');
        const totalPriceInput = document.getElementById('total_price');

        function updateTotalPrice() {
            const selectedOption = serviceSelect.options[serviceSelect.selectedIndex];
            const pricePer1000 = selectedOption.dataset.price;
            const quantity = quantityInput.value;
            const totalPrice = (quantity / 1000) * pricePer1000;
            totalPriceInput.value = '$' + totalPrice.toFixed(2);
        }

        serviceSelect.addEventListener('change', updateTotalPrice);
        quantityInput.addEventListener('input', updateTotalPrice);

        // Initial calculation
        updateTotalPrice();
    </script>
</body>
</html>