<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Demo View</title>
</head>
<body>
<h2>Hello word</h2>
<form action="/customer/register" method="post">
    @csrf
    <div class="form-group">
        <label>Name:</label>
        <input type="text"  name="name">
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="text"  name="email">
    </div>
    <div class="form-group">
        <label>Birthday :</label>
        <input type="date"  name="birthday">
    </div>
    <div class="form-group">
        <label>Phone:</label>
        <input type="integer"  name="phone">
    </div>
    <div class="form-group">
        <label >Address:</label>
        <input type="text" name="address">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
