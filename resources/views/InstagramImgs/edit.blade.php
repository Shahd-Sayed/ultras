<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/InstagramImg/<?=$InstagramImgs->id?>" method="post">
        @csrf()
        @method("PUT")
        <input type="file" name="image"> <br>
        <input type="url" name="url" value="<?=$InstagramImgs->url?>">
        <input type="submit" value="send">
    </form>

    
    <h4>Delete</h4>
    <form action="/InstagramImg/<?=$InstagramImgs->id?>" method="post">
        @csrf()
        @method("DELETE")
        <input type="submit" value="delete">
    </form>
</body>
</html>