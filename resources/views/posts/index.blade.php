@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-3">
            <div class="pull-left">
                <h2>تاپ لرن</h2>
                <h4>پنل ادمین</h4>
            </div>
            <div class="pull-right mb-4">
                <a class="btn btn-success" href=" {{ route('post.create') }} "> پست جدید </a>
            </div>
        </div>
    </div>

@if ($createMessage = Session::get('success'))
    <div class="alert-success" style="text-align: center">
        {{ $createMessage }}
    </div>
@endif

    @if ($deleteMessage = Session::get('delete'))
        <div class="alert-danger" style="text-align: center">
            {{ $deleteMessage }}
        </div>
    @endif

    @if ($updateMessage = Session::get('update'))
        <div class="alert-primary" style="text-align: center">
            {{ $updateMessage }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>شناسه</th>
            <th>عنوان</th>
            <th>نویسنده</th>
            <th>تاریخ انتشار</th>
            <th>عملیات</th>
        </tr>

        @foreach($posts as $post)

        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <th> {{ $post->user->name }} </th>
            <td>{{ $post->started_at }}</td>
            <td>
                <form action=" {{ route('post.destroy', $post->id) }} " method="POST">
                    @csrf
                    <a class="btn btn-info" href=" {{ route('post.show', $post->id) }} ">نمایش</a>
                    <a class="btn btn-primary" href=" {{ route('post.edit', $post->id) }} ">ویرایش</a>
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">حذف</button>
                </form>
            </td>
        </tr>

        @endforeach

    </table>

    @endsection
