@extends('backend.master')
@section('content')
    <h1 class="text-center mt-3 mb-2">update categories</h1>
    <h1 class="text-center mb-2">welcome : {{Auth::User()->name}}</h1>
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12 " style="margin-left: 10px;">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Basic form</h6>
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-secondary rounded h-100 p-4">
                        <form action="{{ route('category.update', ['id'=>$categories->id]) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Title of categoty</label>
                                <input type="text" name="title" value="{{$categories['title']}}" class="form-control" placeholder="category" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <button type="submit" class="btn btn-primary">update category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   
@endsection