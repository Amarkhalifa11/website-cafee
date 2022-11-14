@extends('backend.master')
@section('content')
    <h1 class="text-center mt-3 mb-2">update post</h1>
    <h1 class="text-center mb-2">welcome : {{ Auth::User()->name }}</h1>
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12 " style="margin-left: 10px;">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Basic form</h6>
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-secondary rounded h-100 p-4">
                        <form action="{{ route('bac_all_posts.update', ['id'=>$posts->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-6">
                                <label for="exampleInputEmail1" class="form-label">Title</label>
                                <input type="text" name="name" value="{{$posts['name']}}" class="form-control" placeholder="name"
                                    id="exampleInputEmail1">
                            </div>

                            <div class="mb-6">
                                <label for="exampleInputEmail1" class="form-label">auther</label>
                                <input type="text" name="auther" value="{{$posts['auther']}}" class="form-control" placeholder="auther"
                                    id="exampleInputEmail1">
                            </div>

                            <div class="mb-6">
                                <label for="exampleInputEmail1" class="form-label">date</label>
                                <input type="date" name="date" value="{{$posts['date']}}" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="mb-6">
                                <label for="exampleInputEmail1" class="form-label">category</label>
                                 <select class="form-select" name="category"  value="{{$posts['category']}}">
                                    <option selected>Open this select menu</option>
                                    <option value="sport">sport</option>
                                    <option value="economy">economy</option>
                                    <option value="artist">artist</option>
                                    <option value="social">social</option>
                                </select> 
                            </div>


                            <div class="mb-6">
                                <label for="exampleInputEmail1" class="form-label">image</label>
                                <input type="file" name="image" value="{{$posts['image']}}" required class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="mb-6">
                                <label for="exampleInputEmail1" class="form-label">description</label>
                                <textarea name="description" value="" class="form-control" id="exampleInputEmail1">{{$posts['description']}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">update post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
