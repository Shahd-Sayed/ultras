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
        id - {{$InstagramImgs->id}} <br>
        image - {{$InstagramImgs->image}} <br>
        url - {{$InstagramImgs->url}}<br>
        created_at - {{$InstagramImgs->created_at}}<br>
        updated_at - {{$InstagramImgs->updated_at}}<br>
    </p>


</body>

</html>