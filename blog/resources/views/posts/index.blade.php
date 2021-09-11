
<x-layout>


    @include('posts._header')


    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if($posts->count())

            <x-post-grid :posts="$posts" />

            {{$posts->links()}}

        @else
            <p class="text-center">No Posts yet. Please check back later. </p>
        @endif






{{--        </div>--}}
    </main>



    {{--    @foreach($posts as $post)--}}

{{--        --}}{{--    @dd($loop);--}}
{{--        <article class="{{ $loop->even ? 'foobar' :'' }}">--}}

{{--            <a href="/posts/{{$post->slug}}">--}}

{{--                <h1>{!! $post->title !!}</h1>--}}
{{--            </a>--}}

{{--            <p>--}}
{{--                By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in  <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>--}}
{{--            </p>--}}


{{--            <div>--}}
{{--                {{$post->excerpt}}--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}

</x-layout>
































{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link rel="stylesheet" href="app.css">--}}
{{--    <script src="app.js"></script>--}}
{{--    <title>My Blog</title>--}}
{{--</head>--}}
{{--<body>--}}

{{--@foreach($posts as $post)--}}

{{--    @dd($loop);--}}
{{--    <article class="{{ $loop->even ? 'foobar' :'' }}">--}}

{{--        <a href="/posts/{{$post->slug}}">--}}

{{--            <h1>{{$post->title}}</h1>--}}
{{--        </a>--}}


{{--        <div>--}}
{{--            {{$post->excerpt}}--}}
{{--        </div>--}}
{{--    </article>--}}
{{--@endforeach--}}
{{--</body>--}}
{{--</html>--}}


































{{--@extends('components.layout')--}}

{{--@section('content')--}}

{{--    @foreach($posts as $post)--}}

{{--        --}}{{--    @dd($loop);--}}
{{--        <article class="{{ $loop->even ? 'foobar' :'' }}">--}}

{{--            <a href="/posts/{{$post->slug}}">--}}

{{--                <h1>{{$post->title}}</h1>--}}
{{--            </a>--}}


{{--            <div>--}}
{{--                {{$post->excerpt}}--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}

{{--@endsection--}}





























{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link rel="stylesheet" href="app.css">--}}
{{--    <script src="app.js"></script>--}}
{{--    <title>My Blog</title>--}}
{{--</head>--}}
{{--<body>--}}

{{--@foreach($posts as $post)--}}

{{--    @dd($loop);--}}
{{--    <article class="{{ $loop->even ? 'foobar' :'' }}">--}}

{{--        <a href="/posts/{{$post->slug}}">--}}

{{--            <h1>{{$post->title}}</h1>--}}
{{--        </a>--}}


{{--        <div>--}}
{{--            {{$post->excerpt}}--}}
{{--        </div>--}}
{{--    </article>--}}
{{--@endforeach--}}
{{--</body>--}}
{{--</html>--}}












