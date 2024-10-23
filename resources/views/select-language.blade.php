<!DOCTYPE html>
<html>
<head>
    <title>Select Language</title>
</head>
<body>
    <h1>Select Your Preferred Language</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/set-language" method="POST">
        @csrf
        <label for="language">Choose a language:</label>
        <select name="language" id="language" required>
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="es">Spanish</option>
        </select>

        <button type="submit">Save Language</button>
    </form>
</body>
</html>
