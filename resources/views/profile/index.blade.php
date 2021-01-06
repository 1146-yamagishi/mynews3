@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption align=left">
                                <div class="name p-2">
                                    <h2>{{ str_limit($headline->name, 70) }}</h2>
                                </div>
                            </div>
                            <div class="caption align=left">
                                <div class="gender p-2">
                                    <h2>{{ str_limit($headline->gender, 70) }}</h2>
                                </div>
                            </div>
                            <div class="hobby align=left">
                                <div class="title p-2">
                                    <h2>{{ str_limit($headline->hobby, 70) }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    {{ str_limit($post->name, 150) }}
                                </div>
                                <div class="gender">
                                    {{ str_limit($post->gender, 150) }}
                                </div>
                                <div class="hobby">
                                    {{ str_limit($post->hobby, 150) }}
                                </div>
                            </div>
                            <div class="introduction col-md-6 text-right mt-2">
                                {{ str_limit($post->introduction, 1500) }}
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection