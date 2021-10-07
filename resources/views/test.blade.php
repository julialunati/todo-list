<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TEST</title>

</head>

<body class="antialiased">


    @foreach ($categories as $category)
    <div>
        <div>{{ $category->id }}</div>
        <div>{{ $category->title }}</div>
    </div>
    @endforeach

</body>

</html>