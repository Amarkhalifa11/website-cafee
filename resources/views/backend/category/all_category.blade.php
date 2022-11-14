@extends('backend.master')
@section('content')
    <h1 class="text-center mt-3 mb-2">all categories</h1>
    <h1 class="text-center mb-2">welcome : {{Auth::User()->name}}</h1>
    <h1 class="text-center mb-2">count of category is : {{count($categories)}}</h1>
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12 " style="margin-left: 10px;">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Basic Table</h6>
                <table class="table table-hover table-striped table-active">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">edit</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td scope="row">{{$category->id}}</td>
                            <td>{{$category->title}}</td>
                            <td><a href="{{ route('category.edit', ['id'=>$category->id]) }}" class="btn btn-success">edit</a></td>
                            <td><a href="{{ route('category.destroy', ['id'=>$category->id]) }}" class="btn btn-danger">delete</a></td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>   
@endsection