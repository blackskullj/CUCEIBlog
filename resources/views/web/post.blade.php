@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $post->title }}</h1>
            <div class="card">
                <div class="card-header">
                    Categoría
                    <a href="{{ route('category', $post->category->slug) }}"
                        class="alert alert-secondary alert-link">{{ $post->category->name }}</a>
                </div>
                <div class="card-body">
                    @if ($post->file)
                    <img src="{{ $post->file }}" class="img-fluid" />
                    @endif
                    <div class="card-text">{{ $post->extract }}</div>
                    <hr />
                    <div class="card-text">{!! $post->body !!}</div>
                    <hr />
                    Etiquetas
                    @foreach ($post->tags as $tag)
                    <a href="{{ route('tag', $tag->slug) }}" class="btn btn-outline-dark">
                        {{ $tag->name }}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection