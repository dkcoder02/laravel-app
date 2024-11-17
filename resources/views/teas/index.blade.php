<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teas</title>
</head>

<body>
    @foreach ($teas as $tea)
        <a href="tea/{{ $tea['id'] }}">
            <li>name of tea is ::{{ $tea['name'] }}</li>
        </a>
    @endforeach
    <li><a href="/">Back</a></li>
</body>

</html>