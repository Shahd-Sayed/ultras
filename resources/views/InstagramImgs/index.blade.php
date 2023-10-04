<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>{{$title_page}}</h1>
    @foreach($instagramImgs as $instagramImg)
    <p>
        {{$instagramImg->id}} -
        {{$instagramImg->image}} 
        <a href="/InstagramImg/{{$instagramImg->id}}">details</a> ||<a href="/InstagramImg/{{$instagramImg->id}}/edit">edit</a> 
    </p>
    @endforeach
</body>

</html>