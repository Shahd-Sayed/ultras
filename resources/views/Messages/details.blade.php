<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        id - {{$messages->id}} <br>
        name - {{$messages->name}} <br>
        email - {{$messages->email}} <br>
        message - {{$messages->message}} <br>
        created_at - {{$messages->created_at}}<br>
        updated_at - {{$messages->updated_at}}<br>
    </p>


</body>

</html>
</body>
</html>