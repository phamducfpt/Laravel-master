<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Event Form</h1>
<form action="/event/events" method="post">
    @csrf
    <div>
        <input type="text" name="name">
    </div>
    <div>
        <input type="text" name="description">
    </div>
    <div>
        <input type="text" name="price">
    </div>
    <div>
        <button> submit</button>
    </div>
</form>
</body>
</html>
