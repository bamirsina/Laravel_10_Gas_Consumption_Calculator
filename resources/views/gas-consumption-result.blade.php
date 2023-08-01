<!-- gas-consumption-result.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gas Consumption Result</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="card">
    <h1>Gas Consumption Result</h1>
    <div class="result-item">Total Gas Cost: {{ $totalGasCost }} LEKE</div>

    <a href="{{ route('gas-consumption-form') }}" class="back-to-form">Back to Form</a>
</div>
</body>
</html>
