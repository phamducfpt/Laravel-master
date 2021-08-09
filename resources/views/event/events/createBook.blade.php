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
<div class="header">
    <h1>Library</h1>
</div>
<div>
    <form action="events/createBook.blade.php" method="post">
        <div>
            idBook<input type="text" name="BookID">
        </div>
        <div>
            authorid<input type="text" name="Authorid">
        </div>
        <div>
            title<input type="text" name="Title">
        </div>
        <div>
            iSBN<input type="text" name="ISBN">
        </div>
        <div>
            pub_year<input type="date" name="year">
        </div>
        <div>
            available<input type="text" name="available">
        </div>
    </form>
</div>
</body>
</html>
