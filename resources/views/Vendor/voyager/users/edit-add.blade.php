<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@extends('voyager::master')

@section('page_title', __('voyager::generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
@stop

@section('content')
    <div class="page-content container-fluid">
        <form class="form-edit-add" role="form"
              action="@if(!is_null($dataTypeContent->getKey())){{ route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) }}@else{{ route('voyager.'.$dataType->slug.'.store') }}@endif"
              method="POST" enctype="multipart/form-data" autocomplete="off">
            <!-- PUT Method if we are editing -->
            @if(isset($dataTypeContent->id))
                {{ method_field("PUT") }}
            @endif
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-bordered">
                    {{-- <div class="panel"> --}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="panel-body">
                            <div class="form-group">
                                <label for="name">{{ __('voyager::generic.name') }}</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('voyager::generic.name') }}"
                                       value="{{ old('name', $dataTypeContent->name ?? '') }}">
                            </div>

                       <div class="form-group">
                        <label for="name">{{ __('voyager::generic.email') }}</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="{{ __('voyager::generic.email') }}"
                                       value="{{ old('email', $dataTypeContent->email ?? '') }}">
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('voyager::generic.password') }}</label>
                                @if(isset($dataTypeContent->password))
                                    <br>
                                    <small>{{ __('voyager::profile.password_hint') }}</small>
                                @endif
                                <input type="password" class="form-control" id="password" name="password" value="" autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <label for="address">地址</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="{{ __('voyager::generic.address') }}"
                                       value="{{ old('address', $dataTypeContent->address ?? '') }}">
                            </div>



                            {{-- <div class="form-group">
                                <label for="branch_id">駐點</label> --}}
                                {{-- <input type="checkbox" class="checkbox-inline" name="branch[]" id="branch[]" value="新豐"><label>新豐</label>
                                <input type="checkbox" class="checkbox-inline"  name="branch[]" id="branch[]" value="楊梅"><label>楊梅</label>
                                <input type="checkbox" class="checkbox-inline"  name="branch[]" id="branch[]" value="龍潭"><label>龍潭</label>
                                <input type="checkbox" class="checkbox-inline"  name="branch[]" id="branch[]" value="龍岡"><label>龍岡</label> --}}
                                {{-- <input type="text"  class="form-control" id="branch_id" name="branch_id" placeholder="{{ __('voyager::generic.branch_id') }}"
                                       value="{{ old('branch_id', $dataTypeContent->branch ?? '') }}">
                            </div> --}}

                            {{-- <div class="form-group">
                                <label for="branch_id">{{ __('voyager::generic.locale') }}</label>
                                <select class="form-control select2" id="branch_id" name="branch_id">
                                    @foreach (Voyager::getLocales() as $branch_id)
                                    <option value="{{ $branch_id }}"
                                    {{ ($branch_id == $selected_branch_id ? 'selected' : '') }}>{{ $branch_id }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div> --}}
  {{--  駐點  --}}
                <div class="form-group">
                    <label for="branch_id">駐點</label>
                    @php
                        $dataTypeRows = $dataType->{(isset($dataTypeContent->id) ? 'editRows' : 'addRows' )};

                        $row     = $dataTypeRows->where('field', 'user_belongsto_branch_list_relationship')->first();
                        $options = $row->details;
                    @endphp
                    @include('voyager::formfields.relationship')
                </div>

  {{--  電話  --}}
                <div class="form-group">
                    <label for="phone">電話</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="{{ __('voyager::generic.phone') }}"
                           value="{{ old('phone', $dataTypeContent->phone ?? '') }}">
                </div>


{{--
                <div class="form-group">
                    <label for="happy" class="col-sm-4 col-md-4 control-label text-right">性別</label>
                    <div class="col-sm-7 col-md-7">
                        <div class="input-group">
                            <div id="radioBtn" class="btn-group">
                                <a class="btn btn-primary btn-sm active" data-toggle="happy" data-title="男">YES</a>
                                <a class="btn btn-primary btn-sm notActive" data-toggle="happy" data-title="女">NO</a>
                            </div>
                            <input type="hidden" name="happy" id="happy">
                        </div>
                    </div>
                </div>
                <br /><br />  --}}


  {{--  性別  --}}
@php
        $mchecked='';
        $mactive='';
        $wchecked= '';
         $wactive='';
        if (  old('phone', $dataTypeContent->sex ?? '')=='男' ){
            $mchecked= 'checked';
            $mactive='active';
        }else{
            $wchecked= 'checked';
              $wactive='active';
        }
@endphp
    <label for="sex">性別</label><br>
<div class="btn-group" data-toggle="buttons">

    <label class="btn btn-primary  {{ $mactive}}">
      <input type="radio" name="sex" id="sex" value="男"  {{ $mchecked}}> 男
    </label>
    <label class="btn btn-primary  {{ $wactive}}">
      <input type="radio" name="sex" id="sex"  value="女"  {{ $wchecked}}>女
    </label>

  </div>

  {{--  <div class="form-group">

    <label for="sex">性別</label><br>
   男：<input type="radio"  id="sex" name="sex"  value="男" {{ $mchecked}}> &nbsp;
   女：<input type="radio"  id="sex" name="sex"  value="女" {{ $wchecked}}>
</div>


<div class="form-group">
    <label for="sex">性別</label><br>
    <div class="form-control">
      <label class="radio-inline">
    <input type="radio"  id="sex" name="sex"  value="男" {{ $mchecked}}>    男
      </label>
      <label class="radio-inline">
        <input type="radio"  id="sex" name="sex"  value="女" {{ $wchecked}}>女
      </label>
    </div>
  </div>  --}}


   {{--  停權  --}}
@php
$ochecked='';
$oactive='';
$fchecked= '';
 $factive='';
/*
if (  old('phone', $dataTypeContent->lock ?? '')=='0' ){
    $ochecked= 'checked';
    $oactive='active';
}else{
    $fchecked= 'checked';
      $factive='active';
} */

switch ( old('phone', $dataTypeContent->lock ?? ''))
{
case '0':
$ochecked= 'checked';
$oactive='active';
  break;
case '1':
$fchecked= 'checked';
$factive='active';
  break;
default:
$fchecked= 'checked';
$factive='active';
}

@endphp
<div class="form-group">
<label for="lock">帳號狀態</label><br>
<div class="btn-group" data-toggle="buttons">

<label class="btn btn-secondary  {{ $factive}}">
<input type="radio" name="lock" id="lock" value="1"  {{ $fchecked}}>  啟動
</label>
<label class="btn btn-secondary  {{ $oactive}}">
<input type="radio" name="lock" id="lock"  value="0"  {{ $ochecked}}> 停權
</label>
</div>
</div>




  {{--  停權
  @php
        $ochecked='';
        $fchecked= '';

        if (  old('phone', $dataTypeContent->lock ?? '')=='0' ){
            $ochecked= 'checked';
        }else{
            $fchecked= 'checked';
        }
@endphp
  <div class="form-group">
    <label for="lock">帳號狀態</label><br>
   啟動：<input type="radio"  id="lock" name="lock"  value="1"  {{ $fchecked}}> &nbsp;
   停權：<input type="radio"  id="lock" name="lock"  value="0"  {{ $ochecked}}>

</div>  --}}

  {{--  預設角色  --}}
                            @can('editRoles', $dataTypeContent)
                                <div class="form-group">
                                    <label for="default_role">{{ __('voyager::profile.role_default') }}</label>
                                    @php
                                        $dataTypeRows = $dataType->{(isset($dataTypeContent->id) ? 'editRows' : 'addRows' )};
                                        $row     = $dataTypeRows->where('field', 'user_belongsto_role_relationship')->first();
                                        $options = $row->details;
                                    @endphp
                                    @include('voyager::formfields.relationship')
                                </div>
  {{--  附加角色  --}}
                                <div class="form-group">
                                    <label for="additional_roles">{{ __('voyager::profile.roles_additional') }}</label>
                                    @php
                                        $row     = $dataTypeRows->where('field', 'user_belongstomany_role_relationship')->first();
                                        $options = $row->details;
                                    @endphp
                                    @include('voyager::formfields.relationship')
                                </div>
                            @endcan

  {{--  本地化  --}}
                            @php
                            if (isset($dataTypeContent->locale)) {
                                $selected_locale = $dataTypeContent->locale;
                            } else {
                                $selected_locale = config('app.locale', 'en');
                            }

                            @endphp


                            <div class="form-group">
                                <label for="locale">{{ __('voyager::generic.locale') }}</label>
                                <select class="form-control select2" id="locale" name="locale">
                                    @foreach (Voyager::getLocales() as $locale)
                                    <option value="{{ $locale }}"
                                    {{ ($locale == $selected_locale ? 'selected' : '') }}>{{ $locale }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel panel-bordered panel-warning">
                        <div class="panel-body">
                            <div class="form-group">
                                @if(isset($dataTypeContent->avatar))
                                    <img src="{{ filter_var($dataTypeContent->avatar, FILTER_VALIDATE_URL) ? $dataTypeContent->avatar : Voyager::image( $dataTypeContent->avatar ) }}" style="width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;" />
                                @endif
                                <input type="file" data-name="avatar" name="avatar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary pull-right save">
                {{ __('voyager::generic.save') }}
            </button>
        </form>

        <iframe id="form_target" name="form_target" style="display:none"></iframe>
        <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
            {{ csrf_field() }}
            <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
            <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
        </form>
    </div>
@stop

@section('javascript')
    <script>
        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();
        });
    </script>
@stop
