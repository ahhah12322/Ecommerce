<!DOCTYPE html>
<html>

<head>
    <title>{{ $details['title'] }}</title>
</head>

<body>
    @if (session()->has('message'))
        <script>
            alert('{{ session('message') }}');
        </script>
    @endif
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
</body>

</html>
