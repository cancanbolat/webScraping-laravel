<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div{
            border: 2px solid #000;
            margin-bottom: 10px;
            padding: 10px;
        }
    </style>
    <title>Laravel Web Scraping</title>
</head>
<body>
    @foreach($data as $key => $value)
        <div>
            <h1>{{$key}}</h1>
            <p>{{$value}}</p>
        </div>
    @endforeach
</body>
</html>