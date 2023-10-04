<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/Slider" method="post">
        @csrf()
        <input type="text" name="title" placeholder="title"><br>
        <input type="text" name="description" placeholder="description"><br>
        <input type="file" name="image" > <br>
        <input type="url" name="url"><br>
        <input type="submit" value="send">
    </form>
</body>
</html>