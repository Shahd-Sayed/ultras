<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>{{$title_page}}</h1>
    @foreach($sliders as $slider)
    <p>
        {{$slider->id}} -
        {{$slider->title}} 
        <a href="/Slider/{{$slider->id}}">details</a> ||<a href="/Slider/{{$slider->id}}/edit">edit</a> 
    </p>
    @endforeach
</body>

</html>