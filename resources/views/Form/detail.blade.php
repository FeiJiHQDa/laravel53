@extends('common.index')


@section('content')
<!--自定义内容区域-->
<div class="panel panel-default">
    <div class="panel-heading">学生详情</div>
    <table class="table table-striped table-hover table-responsive">
        <tbody>
        <tr>
            <td width="50%">ID</td>
            <td>{{ $forms->id }}</td>
        </tr>
        <tr>
            <td>姓名</td>
            <td>{{ $forms->name }}</td>
        </tr>
        <tr>
            <td>年龄</td>
            <td>{{ $forms->age }}</td>
        </tr>
        <tr>
            <td>性别</td>
            <td>{{ $forms->sex }}</td>
        </tr>
        <tr>
            <td>增加日期</td>
            <td>{{ $forms->created_at }}</td>
        </tr>
        <tr>
            <td>最后修改</td>
            <td>{{ $forms->updated_at }}</td>
        </tr>
        </tbody>
    </table>
</div>
@stop
@section('javascript')
    <script>
        $(".eq-event").eq(0).addClass('active');
    </script>

@endsection