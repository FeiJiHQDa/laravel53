@extends('common.index')


@section('content')

    @include('common.hint')


    <!--自定义内容区域-->
    <div class="panel panel-default">
        <div class="panel-heading">修改学生</div>
        <div class="panel-body">


            <form class="form-horizontal" method="post" action="">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-md-2 control-label">姓名</label>
                    <div class="col-sm-5">
                        <input type="text" id="name" name="Form[name]"
                               value="{{ old('Form')['name'] ? old('Form')['name'] : $forms->name }}" class="form-control"
                               placeholder="请输入学生姓名">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger"> {{ $errors->first('Form.name') }}</p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="age" class="col-md-2 control-label">年龄</label>
                    <div class="col-sm-5">
                        <input type="text" id="age" name="Form[age]"
                               value="{{ old('Form')['age'] ? old('Form')['age'] : $forms->age }}" class="form-control"
                               placeholder="请输入学生年龄">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{ $errors->first('Form.age') }}</p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">性别</label>

                    <div class="col-sm-5">

                        @foreach($forms->sex() as $key => $val)

                            <label for="radio-inline">
                                <input type="radio" {{ $key == $forms->sex ? 'checked' : '' }} name="Form[sex]"
                                       value="{{ $key }}"> {{ $val }}
                            </label>

                        @endforeach

                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{ $errors->first('Form.sex') }}</p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection

@section('javascript')
    <script>
        $(".eq-event").eq(0).addClass('active');
    </script>

@endsection