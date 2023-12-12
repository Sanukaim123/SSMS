<html>
    <head>
        <link rel="stylesheet" href="{{ asset('CSS/form1.css') }}">
        <title>Form</title>
    </head>
<body>


<!-- resources/views/money_transfer/form.blade.php -->
<div class="st">
<form method="POST" action="{{ route('payment') }}">
    @csrf
    <table>
    <!-- Recipient Email -->
    <label for="recipient_email">Recipient Email:</label>
    <input type="email" name="recipient_email" id="recipient_email" required>
    <br><br>
    <!-- Amount -->
    <label for="amount">Amount:</label>
    <input type="number" name="amount" id="amount" required>
    <br><br>
    <!-- Description -->
    <label for="description">Description:</label>
    <input type="text" name="description" id="description">
    <br><br>
    <!-- Submit Button -->
    <button type="submit">Transfer Money</button>
    </table>
</form>
</div>
</body>
</html>