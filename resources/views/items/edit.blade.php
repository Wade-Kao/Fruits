<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
       編輯商品
    </title>
</head>
<body>

    {{-- http://voyage.com:6080/items/xx/edit --}}
{{-- 與欄位相同名稱既會自動抓取更新 --}}
    {!! Form::model($item ,['url'=>'items/'.$item->id,'method'=>'patch','files'=>true])!!}

  @include('items._form');

    {!! Form::close() !!}

</body>
</html>
