<!DOCTYPE html>
<html>
<head>
    <title>Laravel Validation</title>
</head>
<body>
    <h2>Laravel Validation Form</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('form.submit') }}" method="POST">
        

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <span>{{ $message }}</span>
        @enderror
        <br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" value="{{ old('email') }}">
        @error('email')
            <span>{{ $message }}</span>
        @enderror
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password">
        @error('password')
            <span>{{ $message }}</span>
        @enderror
        <br><br>

        <button type="submit">Submit</button>

        @if (session('success'))
    <div>
        {{ session('success') }}
    </div>
        @endif

    </form>
</body>
</html>
