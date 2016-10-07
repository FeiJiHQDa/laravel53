<!--成功提示-->
@if(Session::has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>成功!</strong> {{ Session::get('success') }}
</div>

@endif
<!--成功提示-->

@if(Session::has('errors'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>失败!</strong> {{ Session::get('errors') }}
</div>
@endif