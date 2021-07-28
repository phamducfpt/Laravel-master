<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .message-error{
            color: red;
        }
    </style>
    <title>Document</title>
</head>
<body>
<h3>Using CSS to style an HTML Form</h3>
<div>
    @if($errors->any())
        <ul class="message-error">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="/demo/validate/store" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="firstname" placeholder="Your name..">
        @error('name')
        <div class="message-error">*{{$message}}</div>
        @enderror
        <label for="description">Description</label>
        <input type="text" id="description" name="description" placeholder="Your description..">
        @error('description')
        <div class="message-error">*{{$message}}</div>
        @enderror
        <label for="price">Price</label>
        <input type="text" name="price" placeholder="Your price..">
        @error('price')
        <div class="message-error">*{{$message}}</div>
        @enderror
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
