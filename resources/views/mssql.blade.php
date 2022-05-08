<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel SQL SERVER Connection</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td{
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>SQL SERVER & PHP</h1>
    <hr>
    <table>
        <thead>
            <th>Language</th>
            <th>Founder</th>
            <th>Year</th>
            <th>Is Popular</th>
        </thead>
        <tbody>
            @foreach($readDatas as $data)
            <tr>
                <td>{{$data->Language}}</td>
                <td>{{$data->Founder}}</td>
                <td>{{$data->Year}}</td>
                <td>{{$data->IsPopular ==1 ? 'True' : 'False'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>