       {{--      @foreach($items as $menu_item)
            <li class="nav-item "><a href="{{ $menu_item->link() }}" class="nav-link">{{ $menu_item->title }}</a></li>
             @if(count($menu_item->children)>0)
                    @foreach($menu_item->children as $menu_sub_item)

                        <li class="nav-item"><a href="{{ $menu_sub_item->link() }}" class="nav-link">{{ $menu_sub_item->title }}</a></li>
                    @endforeach
            @endif
         @endforeach
         --}}

              @foreach($items as $menu_item)
            <li class="dropdown"><a href="{{ $menu_item->link() }}" class="dropdown-toggle" data-toggle="dropdown" >{{ $menu_item->title }}</a></li>
             @if(count($menu_item->children)>0)
                    @foreach($menu_item->children as $menu_sub_item)
                        <li ><a href="{{ $menu_sub_item->link() }}" class="dropdown-item">{{ $menu_sub_item->title }}</a></li>
                    @endforeach
            @endif
         @endforeach
  {{--
         <ul class="dropdown-menu">

              <li class="dropdown">
                   <a class=" dropdown-toggle" href="#" id="22" data-toggle="dropdown" >22<span class="caret"></span></a></li>

                <li ><a href="#" class="dropdown-item">33</a></li>

     </ul>

  <ul class="dropdown-menu">
             @foreach($items as $menu_item)
               <li class="dropdown">
                    <a class=" dropdown-toggle" href="#" id="{{ $menu_item->link() }}" data-toggle="dropdown" >{{ $menu_item->title }}<span class="caret"></span></a></li>


                    @if(count($menu_item->children)>0)

                            @foreach($menu_item->children as $menu_sub_item)
                                <li ><a href="{{ $menu_sub_item->link() }}" class="dropdown-item">{{ $menu_sub_item->title }}</a></li>
                            @endforeach
                    @endif

      @endforeach
      </ul>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">平台管理<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="#">進貨管理</a></li>
            <li><a href="#">出貨管理</a></li>
            <li><a href="#">商品維護</a></li>
            <li><a href="#">庫存查詢</a></li>
            <li><a href="#">報表查詢</a></li>
        </ul>
    </li>



         <div class="dropdown">
            <button class="dropdown-toggle" data-toggle="dropdown">MENU</button>
            <div class="dropdown-menu">
              <a href="" class="dropdown-item">Link1</a>
              <a href="" class="dropdown-item">Link2</a>
              <a href="" class="dropdown-item">Link3</a>
            </div>
          </div>

          <li class="nav-item dropdown">  <!-- 加上 dropdown, 表示擁有下一層收合展開的子選單 ********** -->
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">menuItem</a>  <!-- a連結加上 dropdown-toggle 及相關的屬性 ********** -->
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">  <!-- 子選單的 div ********** -->
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>  --}}



         {{--  @foreach($items as $menu_item)
         <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
     @endforeach  --}}

