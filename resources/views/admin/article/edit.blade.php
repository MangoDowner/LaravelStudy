@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">修改一篇文章</div>
				<div class="panel-body">
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                    	<strong>修改失败</strong> 
                    	输入不符合要求<br><br>
                    	{!!implode('<br>',$errors->all())!!}
                    </div>
                    @endif
                    <form action='{{ url("admin/article/$articles->id") }}' method="POST">
                        {{method_field('PUT')}}
                    	{!!csrf_field()!!}

                        <select class="chosen-select form-control mt10" name="select-column-id" id="select-column-id">
                            <option value="">选择分类</option>
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                        </select>
                    	<input type="text" name="title" class="form-control" required="required" placeholder="请输入标题" value="{{ $articles->title }}">
                    	<br>
                    	<textarea name="body" rows="10" class="form-control" required="required" placeholder="请输入内容">{{ $articles->body }}</textarea>
                    	<br>
                    	<button class="btn btn-lg btn-info">保存文章</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@include('plugins.chosen')
