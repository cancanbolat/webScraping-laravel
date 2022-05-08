<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Json CRUD</title>
</head>

<body>
    {{-- @foreach ($json as $key => $value)
        <div>
            <h1>{{$key+1}}</h1> 
            <h2>{{$value['title']}}</h2>
            <h3>{{$value['price']}}</h3>
        </div>
        @endforeach --}}

    <div class="container">
        <h1>JSON Read</h1>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Count: {{$readJson->Count()}}</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $k = 1;   
                @endphp
                @foreach ($readJson as $item)
                    <tr>
                        <th scope="row">{{$k++}}</th>
                        <td>{{ $item->Title }}</td>
                        <td>{{ $item->Price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
</body>

</html>
