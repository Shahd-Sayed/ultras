<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
p {
    font-size: 20px !important;
}
h1{
    text-align:center;
}
</style>

<body>
    <h1 >Details page</h1>
    <p>
        id - {{$sliders->id}} <br>
        title - {{$sliders->title}} <br>
        description - {{$sliders->description}} <br>
        image - {{$sliders->image}} <br>
        url - {{$sliders->url}}<br>
        created_at - {{$sliders->created_at}}<br>
        updated_at - {{$sliders->updated_at}}<br>
    </p>


</body>

</html>