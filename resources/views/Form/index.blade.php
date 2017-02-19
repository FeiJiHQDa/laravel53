@extends('common.index')

@section('content')

@include('common.message')

<!--自定义内容区域-->
<div class="panel panel-default">
    <div class="panel-heading">学生列表</div>
    <table class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>年龄</th>
            <th>性别</th>
            <th>添加时间</th>
            <th width="120">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($forms as $form)
            <tr>
            <th scope="row">{{ $form->id }}</th>
            <td>{{ $form->name }}</td>
            <td>{{ $form->age }}</td>
            <td>{{ $form->sex($form->sex) }}</td>
            <td>{{ substr($form->created_at, 0, 10) }}</td>
            <td>
                <a href=" {{ url('form/detail', ['id'=> $form->id]) }}">详情</a>
                <a href=" {{ url('form/update', ['id'=> $form->id]) }}">修改</a>
                <a href="{{ url('form/delete', ['id'=>$form->id]) }}" onclick="if (confirm('你确认要删除') == false) return false;">删除</a>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!--分页-->
<div>
    <div class="pull-right">
        {{ $forms->links() }}
    </div>
</div>

@endsection

@section('javascript')
<script>
    $(".eq-event").eq(0).addClass('active');
</script>

@endsection

