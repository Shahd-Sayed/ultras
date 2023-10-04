<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/InstagramImg" method="post">
        @csrf()
        <input type="file" name="image" > <br>
        <input type="url" name="url">
        <input type="submit" value="send">
    </form>
</body>
</html>