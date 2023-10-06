<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>{{$title_page}}</h1>
    @foreach($testimionals as $testimional)
    <p>
        {{$testimional->id}} -
        {{$testimional->name}}   
        <a href="/Testimionals/{{$testimional->id}}">Details</a>

    </p>

    @endforeach
</body>

</html>