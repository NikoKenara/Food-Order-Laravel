<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <h2>MASTER</h2>
        <ul>
            <li>
                <a href="{{ route('blade-test') }}">Home</a>
                <a href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
    </nav>

    @yield('content')

    <footer>

        <h2>Footer</h2>
    </footer>
</body>
</html>
