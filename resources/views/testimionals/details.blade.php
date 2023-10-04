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
        id - {{$testimionals->id}} <br>
        name - {{$testimionals->name}} <br>
        description - {{$testimionals->description}} <br>
        created_at - {{$testimionals->created_at}}<br>
        updated_at - {{$testimionals->updated_at}}<br>
    </p>


</body>

</html>