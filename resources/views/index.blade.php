
@extends('layouts.master')

@section('title','about')

@section('js')
    <script src="2.js" ></script>
    @parent
@stop

@section('title','首頁')

@section('content')
<div class="container clearfix">
    我的內容
</div>

 @foreach ($data as $tmp)
     <h2>{{ $tmp }}</h2>
     <h3>{{ $loop->index }} </h3>
 @endforeach
@stop
