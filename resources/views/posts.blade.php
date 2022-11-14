@extends('index')
@section('content')
<div class="wrapper row3 mt-5">
    <main class="hoc container clear">
        <article class="group btmspace-80">
            <h1 class="text-center mt-3 mb-3">all posts</h1>
            @foreach ($posts as $post)
                
            <div class="two_third first "><img class="borderedbox inspace-10"
                src="{{ asset('frontend/images/demo/' . $post->image) }}" alt=""></div>
                <div class="one_third">
                    <h6 class="heading">{{$post->name}}</h6>
                    <ul class="nospace meta">
                        <li><i class="fa fa-user"></i> {{$post->auther}}</li>
                        <li><i class="fa fa-tag"></i>{{$post->category}}</li>
                    </ul>
                    <p>Description</p>
                    @php
                        echo Str::limit($post->description, 200, '...')
                    @endphp
                    <hr>
                    {{-- <p class="btmspace-30">{{$post->description}} &hellip;</p> --}}
                        <li><i class="fa fa-bank mb-2"></i> {{$post->date}}</li>
                        <hr>
                    <footer class="nospace"><a class="btn" href="{{ route('single', ['id'=>$post->id]) }}">view all &raquo;</a></footer>
                </div>
                <hr><hr><hr><hr>
            @endforeach
            </article>
            <hr class="btmspace-80">

            <div class="clear"></div>
        </main>
@endsection