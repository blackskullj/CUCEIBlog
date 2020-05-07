@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Detalles Entrada
                </div>
                <div class="card-body">
                    <p><strong>Titulo</strong> {{ $post->title }}</p>
                    <p><strong>Slug</strong> {{ $post->slug }}</p>
                    <p><strong>Contenido</strong> {!! $post->body !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection