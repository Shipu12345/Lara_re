@extends('layout')

@section('content')

    @foreach($posts as $post)

        {{--    @dd($loop);--}}
        <article class="{{ $loop->even ? 'foobar' :'' }}">

            <a href="/posts/{{$post->slug}}">

                <h1>{{$post->title}}</h1>
            </a>


            <div>
                {{$post->excerpt}}
            </div>
        </article>
    @endforeach

@endsection





























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












