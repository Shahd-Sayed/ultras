<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>{{$title_page}}</h1>
    @foreach($messages as $message)
    <p>
        {{$message->id}} -
       Name : {{$message->name}} 
        <a href="/messages/{{$message->id}}">details</a> 
    </p>
    @endforeach
</body>

</html>