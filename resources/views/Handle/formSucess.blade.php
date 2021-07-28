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
<h1 style="text-align: center">Form Success</h1>
<ul>
    <li>Name : {{$eventname}}</li>
    <li>BandNames : {{$bandname}}</li>
    <li>Start Date : {{$startdate}}</li>
    <li>End Date : {{$enddate}}</li>
    <li>Port Folio : {{$portfolio}}</li>
    <li>Ticker Price : {{$ticketprice}}</li>
    <li>Status :
        @switch($status)
            @case(1)
            Dang Dien Ra
            @break
            @case(2)
            Sap Dien Ra
            @break
            @case(3)
            Da Dien Ra
            @break
            @case(0)
            Tam Hoan
            @break
        @endswitch
    </li>
</ul>
</body>
</html>
