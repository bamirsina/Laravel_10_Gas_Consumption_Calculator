<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gas Consumption Calculator</title>
    <!-- Link to the external CSS file -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div class="card">
    <h2>Gas Consumption Calculator</h2>
    <form action="{{ route('calculate-gas-consumption') }}" method="POST">
        @csrf

        <label for="kilometers_driven">Kilometers Driven:</label>
        <input type="number" name="kilometers_driven" id="kilometers_driven" required>

        <label for="per_kilometer">Gas Consumption (per 100 km):</label>
        <input type="number" name="per_kilometer" id="per_kilometer" step="0.01" required>

        <label for="gas_price">Gas Price per Liter:</label>
        <input type="number" name="gas_price" id="gas_price" step="0.01" required>

        <button type="submit">Calculate Gas Consumption</button>
    </form>
</div>
<script>
    // Format the gas price input value to display in the format "1.80" instead of "180"
    const gasPriceInput = document.getElementById('gas_price');
    gasPriceInput.addEventListener('change', () => {
        gasPriceInput.value = (parseFloat(gasPriceInput.value) / 100).toFixed(2);
    });
</script>
</body>
</html>
