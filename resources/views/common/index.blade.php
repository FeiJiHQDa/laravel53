<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>laravel学习 -- @yield('title')</title>
    {{--<link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}" media="screen">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @section('style')

    @show

<!-- Scripts -->
    <script>
            window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<!--头部-->

@section('header')
<div class="jumbotron">
    <div class="container">
        <h2>轻松学会laravel</h2>
        <p>--laravel表单学习--</p>
    </div>
</div>
@show
<!--中间内容区域-->
<div class="container">
    <div class="row">


        <!--左侧菜单区域-->
        <div class="col-md-3">
            <div class="list-group">
                @section('sidebar')
                <a href="{{ url('form/index') }}" class="list-group-item eq-event ">学生列表</a>
                <a href="{{ url('form/create') }}" class="list-group-item eq-event">新增学生</a>
                @show
            </div>
        </div>


        <!--右侧内容区域-->
        <div class="col-md-9">


            @yield('content')


        </div>

    </div>
</div><!--中间内容区-->

@section('footer')
<!--尾部-->
<div class="jumbotron" style="margin:0">
    <div class="container">
        <span>@2016 imooc</span>
    </div>
</div>
@show

{{--<script src='{{ URL::asset('/') }}js/jquery.min.js'></script>--}}
{{--<script src='.{{ URL::asset('/') }}js/bootstrap.min.js'></script>--}}
<script src="{{ asset('js/app.js') }}"></script>
@section('javascript')

@show
{{--@yield('javascript')--}}

</body>
</html>
