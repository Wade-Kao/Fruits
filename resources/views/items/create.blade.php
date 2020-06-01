<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
       新增商品
    </title>
</head>
<body>

    {{-- http://voyage.com:6080/items/create --}}
    {!! Form::open(['action'=>'ItemController@store','method'=>'POST','files'=>true]) !!}

  @include('items._form')

    {!! Form::close() !!}

</body>
</html>
