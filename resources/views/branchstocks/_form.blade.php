
    {!! Form::label('list_stocks_id', '駐點', ['class'=>'myclass']) !!}
  {!! Form::select('list_stocks_id', $branchlists  ) !!}<br><br>

  {!! Form::label('list_branchs_id', '水果', ['class'=>'myclass']) !!}
  {!! Form::select('list_branchs_id', $detaliproduct  ) !!}<br><br>
  {!! Form::label('bsqty', '價格', []) !!}
  {!! Form::number('bsqty', 0, ['min'=>0,'max'=>10000]) !!}<br><br>
  {!! Form::hidden('bsuser','admin') !!}
  {!! Form::submit('提交', []) !!}
  {!! Form::reset('重置', []) !!}
{{--

    {!! Form::label('title', '標題', ['class'=>'myclass']) !!}
    {!! Form::text('title',null) !!} <br><br>

    {!! Form::label('size', '規格', ['class'=>'myclass']) !!}
    {!! Form::textarea('size', 'L Size', ['cols'=>50,'rows'=>10]) !!}<br><br>


    {!! Form::hidden('hiddenparam', '1234') !!}

    {!! Form::label('isRecommend', '是否推薦商品', []) !!}
    {!! Form::checkbox('isRecommend', 1, true) !!}<br><br>

    {!! Form::label('colors[]', '紅色', []) !!}
    {!! Form::checkbox('colors[]', 'red', false) !!}

    {!! Form::label('colors[]', '黃色', []) !!}
    {!! Form::checkbox('colors[]', 'yallow', false) !!}

    {!! Form::label('colors[]', '綠色', []) !!}
    {!! Form::checkbox('colors[]', 'green', false) !!}<br><br>

    {!! Form::label('enabled', '是否上架', []) !!}
   上架 {!! Form::radio('enabled', 1, true,[]) !!}
    下架{!! Form::radio('enabled', 2, false,[]) !!}<br><br>

    {!! Form::label('price', '價格', []) !!}
     {!! Form::number('price', 0, ['min'=>0,'max'=>10000]) !!}<br><br>

     {!! Form::label('size', '模式', []) !!}
      {!! Form::select('mode',  ['時節'=>['summer'=>'夏日熱銷','winter'=>'冬節獻禮'],'價格'=>['cp'=>'超值商品','boss'=>'老闆跳樓']]) !!}<br><br>
     {!! Form::select('size', $branchlists  ) !!}<br><br>

     {!! Form::label('month', '月份', []) !!}
     {!! Form::selectMonth('month', null,[]) !!}<br><br>

     {!! Form::selectRange('number',1,10,5,[]) !!}<br><br>

     {!! Form::label('pwd', '密碼', []) !!}
     {!! Form::password('pwd',[]) !!}<br><br>

     {!! Form::label('email', 'email', []) !!}
     {!! Form::email('email',null,[]) !!}<br><br>

     {!! Form::label('pic', '圖片', []) !!}
     {!! Form::file('pic',[]) !!}<br><br>

     {!! Form::label('date', '日期', []) !!}
     {!! Form::date('date',null,[]) !!}<br><br>
 @if (isset($item))

     {!! Form::hidden('id',$item->id) !!}

 @endif

{!! Form::submit('提交', []) !!}
{!! Form::reset('重置', []) !!}  --}}
