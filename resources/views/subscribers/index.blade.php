<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>{{$title_page}}</h1>
    @foreach($subscribers as $subscriber)
    <p>
        {{$subscriber->id}} - 
        {{$subscriber->email}}
    </p>

    @endforeach
</body>

</html>