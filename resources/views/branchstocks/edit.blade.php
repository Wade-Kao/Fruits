<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
       編輯商品
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<style type="text/css">


	body{
        background-image:url('{{ Voyager::image( Voyager::setting("site.bg_image"), voyager_asset("images/bg.jpg") ) }}');

       background-size: cover; /* px % auto cover contain */
       background-position: center;
       background-attachment: fixed; /* 圖不跟著移動 */
        font-family: "思源黑體", "標楷體", sans-serif;
        /* text-align: center; */

	}

.ad{
	width: 100%;
 	 height: 500px;
    text-align: left;
    position: absolute;
    top: 40%;
    left: 50%;
	margin-left: -250px;
	opacity: 0.9;
  font-size:20px;
}

.top-nav ul {padding:0;}
.top-nav ul ul {
  position:absolute;
  background:#152732;
}
.top-nav li {
  float:left;
  list-style:none outside none;
  cursor:pointer;
}
.top-nav li a {
  color:#fff;
  display:block;
  font-size:1rem;
  padding:1.25rem;
}
.top-nav li ul li a {
  background:none repeat scroll 0 0 #152732;
  min-width:100%;
  padding:0.625rem;
}
.top-nav li a:hover, .aside-nav li a:hover {background:#2b4c61;}
.top-nav li ul {display:none;}
.top-nav li ul li,.top-nav li ul li ul li {
  float:none;
  list-style:none outside none;
  min-width:100%;
  padding:0;
}
</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
          <div class="offset-sm-3 col-sm-6 btn btn-light text-dark  ad">
    {{-- http://voyage.com:6080/items/xx/edit --}}
{{-- 與欄位相同名稱既會自動抓取更新 --}}
    {!! Form::model($branchstock ,['url'=>'branchstocks/'.$branchstock->id,'method'=>'patch','files'=>true])!!}

  @include('branchstocks._form');

    {!! Form::close() !!}
</div></div></div>
</body>
</html>
