<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trello Web Example</title>
</head>
<body>
   @foreach (json_decode($lists) as $list)
       <span> {{ $list->name }} </span>
       <span> {{ $list->id }} </span>
       <br/>
   @endforeach
</body>
</html>