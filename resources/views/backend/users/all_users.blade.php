@extends('backend.master')
@section('content')
    <h1 class="text-center mt-3 mb-2">all users</h1>
    <h1 class="text-center mb-2">welcome : {{Auth::User()->name}}</h1>
    <h1 class="text-center mb-2">count of users is : {{count($users)}}</h1>
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12 " style="margin-left: 10px;">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Basic Table</h6>
                <table class="table table-hover table-striped table-active">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">created at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            
                        <tr>

                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at->diffForHumans()}}</td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>   
@endsection