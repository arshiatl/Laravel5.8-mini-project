@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-3">
            <div class="pull-left">
                <h2>ویرایش پست</h2>
            </div>
            <div class="pull-right mb-4">
                <a class="btn btn-primary" href=" {{ route('post.index') }} ">بازگشت</a>
            </div>
        </div>
    </div>

    @include('layouts.partials.error')

    <form action=" {{ route('post.update', $post->id )}} " method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>عنوان:</strong>
                    <input type="text" name="title" value=" {{ $post->title }} " class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>نویسنده:</strong>
                    <input type="number" class="form-control" name="user_id" value=" {{ $post->user_id }} " placeholder=" {{ $post->user->name }} ">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-primary">ثبت</button>
            </div>
        </div>

    </form>
    @endsection
