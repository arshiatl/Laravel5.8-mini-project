@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mt-3">
        <div class="pull-left">
            <h2>ساخت پست جدید</h2>
        </div>
        <div class="pull-right mb-4">
            <a class="btn btn-primary" href=" {{ route('post.index') }} ">بازگشت</a>
        </div>
    </div>
</div>

@include('layouts.partials.error')

<form action=" {{ route('post.store') }} " method="POST">
@csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>عنوان:</strong>
                <input type="text" name="title" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نویسنده:</strong>
                <input type="number" class="form-control" name="user_id" placeholder=""></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-primary">ثبت</button>
        </div>
    </div>

</form>
@endsection
