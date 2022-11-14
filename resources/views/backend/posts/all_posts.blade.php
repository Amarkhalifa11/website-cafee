@extends('backend.master')
@section('content')
    <h1 class="text-center mt-3 mb-2">all posts</h1>
    <h1 class="text-center mb-2">welcome : {{Auth::User()->name}}</h1>
    <h1 class="text-center mb-2">count of users is : {{count($posts)}}</h1>
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12 " style="margin-left: 10px;">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Basic Table</h6>
                <table class="table table-hover table-striped table-active">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">category</th>
                            <th scope="col">image</th>
                            <th scope="col">auther</th>
                            <th scope="col">date</th>
                            <th scope="col">description</th>
                            <th scope="col">edit</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            
                        <tr>
@php
    $a=1;
@endphp
                            <th scope="row">{{$post->id -2}}</th>
                            <td>{{$post->name}}</td>
                            <td>{{$post->category}}</td>
                            <td><img src="{{ asset('frontend/images/demo/' . $post->image) }}" width="60" height="40" alt=""></td>
                            <td>{{$post->auther}}</td>
                            <td>{{$post->date}}</td>
                            <td>{{$post->description}}</td>
                            <td><a href="{{ route('bac_all_posts.edit', ['id'=>$post->id]) }}" class="btn btn-success">edit</a></td>
                            <td><a href="{{ route('bac_all_posts.destroy', ['id'=>$post->id]) }}" class="btn btn-danger">delete</a></td>

                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>   
@endsection