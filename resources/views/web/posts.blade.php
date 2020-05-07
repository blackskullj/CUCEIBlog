@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>Posts</h1>
        <div class="row justify-content-center">
            @foreach ($posts as $post)
            <div class="card">
                <div class="card-header">
                    {{ $post->title }} <div class="float-right"> {{ $post->created_at }} </div>
                </div>
                <div class="card-body">
                    @if ($post->file)
                    <img src="{{ $post->file }}" class="img-fluid" />
                    @endif
                    <div class="card-text">
                        {{ $post->extract }}
                    </div>
                    <a href="{{ route('post', $post->slug) }}" class="btn btn-sm btn-info float-right"> Leer más </a>
                </div>
            </div>
            <br />
            @endforeach
            {{ $posts->render() }}
        </div>
    </div>
</div>
@endsection