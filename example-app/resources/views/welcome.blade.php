<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/search" method="POST">
        @csrf
        <input type="text" name="hotel" placeholder="hotel">
        <input type="text" name="radius" placeholder="radius">
        <input type="text" name="like" placeholder="like">
        <button type="submit">найти</button>
    </form>
</body>
</html>
