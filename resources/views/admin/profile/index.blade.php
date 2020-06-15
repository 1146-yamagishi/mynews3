@extends('layouts.admin')
@section('title','自己紹介')

@section('content')
<div class = "container">
    <div class = "row">
        <h2>MYプロフィール一覧</h2>
    </div>
    <div class = "row">
        <div class = "col-md-4">
            <a href="{{ action('Admin\PlofileController@add') }}" role="button" class="btn btn-primary">新規作成</a>
        </div>
        <div class = "col-md-8">
            <form action = "{{action('Admin\PlofileController@index')}}" method = "get">
                <div class="form-group row">
                    <lavel class = "col-md-2">名前</lavel>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="cond_name" value="{{ $cond_name }}">
                    </div>
                    <div class = "col-md-2">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="検索">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="list-profile col-md-12 mx-auto">
            <div class="row">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th width="10%">ID</th>
                            <th width="10%">名前</th>
                            <th width="5%">性別</th>
                            <th width="15%">趣味</th>
                            <th width="40%">自己紹介</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $profile)
                        <tr>
                            <th>{{ $profile->id }}</th>
                            <td>{{ \Str::limit($profile->name, 100) }}</td>
                           <td>{{ \Str::limit($profile->gender, 100) }}</td>
                           <td>{{ \Str::limit($profile->hobby, 100) }}</td>
                           <td>{{ \Str::limit($profile->introduction, 100) }}</td>
                           <td>
                                <div>
                                    <a href="{{ action('Admin\PlofileController@edit', ['id' => $profile->id]) }}">編集</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection