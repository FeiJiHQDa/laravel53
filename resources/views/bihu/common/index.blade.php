<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>逼乎 -- @yield('title')</title>
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
@include('bihu.common.head')

@yield('content')

@section('footer')
    <!--尾部-->
    <div class="jumbotron" style="margin:0">
        <div class="container">
            <span>@2017 whc</span>
        </div>
    </div>
@show

<script src="{{ asset('js/app.js') }}"></script>
@section('javascript')

@show
{{--@yield('javascript')--}}

</body>
</html>
