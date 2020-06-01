1322
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>蔬果庫存</title>
	    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<style type="text/css">


	body{
       background-image: url('images/bg.jpg');
       background-size: cover; /* px % auto cover contain */
       background-position: center;
       background-attachment: fixed; /* 圖不跟著移動 */
        font-family: "思源黑體", "標楷體", sans-serif;
        /* text-align: center; */

	}

.ad{
	width: 100%;
 	 height: 220px;
    text-align: left;
    position: absolute;
    top: 40%;
    left: 50%;
	margin-left: -250px;
	opacity: 0.9;
  font-size:20px;
}

</style>
</head>
<body>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
          <h1 class="navbar-brand">蔬果庫存</h1>
          <button data-toggle="collapse" data-target="#submenu" class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="submenu">
             <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link">駐點管理</a></li>
                <li class="nav-item"><a href="" class="nav-link">登出</a></li>
             </ul>
          </div>

      </nav>

       <div class="container-fluid">
         <div class="row mt-5">
           <div class="offset-sm-3 col-sm-6 btn btn-light text-dark  ad">
			     <form action="#" method="post">
		         <p>選擇商品:
                <select name="Fruits">
                  <option value="Taipei">---</option>
                　<option value="Taipei">蘋果-富士</option>
                　<option value="Taoyuan">蘋果-秋香</option>
                　<option value="Hsinchu">蘋果-金冠</option>
                　<option value="Miaoli">蘋果-五爪</option>
                </select>
             </p>
             <p>選擇尺寸:
                <select name="Fruits">
                  <option value="Taipei">---</option>
                　<option value="Taipei">28</option>
                　<option value="Taoyuan">100</option>
                　<option value="Hsinchu">133</option>

                </select>
             </p>
             <p>數量: <input type="text" name="fcnt" size="4" value="0" />/20</p>
                <input type="submit" value="送出" />
                <input type="reset" value="取消" />


		      </form>
          </div>
         </div>
       </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
