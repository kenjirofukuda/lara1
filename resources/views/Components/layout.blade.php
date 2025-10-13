<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
</head>
<body>
    <nav>
        <x-navlink>Home</x-navlink>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
    {{ $slot }}
</body>
</html>
