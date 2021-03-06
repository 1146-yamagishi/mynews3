@extends('layouts.admin')
@section('title', '自己紹介編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>自己紹介編集</h2>
                <form action="{{ action('Admin\PlofileController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profiles_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">性別</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="gender" value="{{ $profiles_form->gender }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">趣味</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ $profiles_form->hobby }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">自己紹介</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ $profiles_form->introduction }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $profiles_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection