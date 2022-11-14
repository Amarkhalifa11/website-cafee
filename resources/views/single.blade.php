@extends('index')
@section('content')
    <div class="wrapper row3 mt-5">
        <main class="hoc container clear">
            <article class="group btmspace-80">
                <h1 class="text-center mt-3 mb-3">the posts</h1>

                <div class="two_third first "><img class="borderedbox inspace-10"
                        src="{{ asset('frontend/images/demo/' . $posts['image']) }}" alt=""></div>
                <div class="one_third">
                    <h6 class="heading">{{ $posts['name'] }}</h6>
                    <ul class="nospace meta">
                        <li><i class="fa fa-user"></i> {{ $posts['auther'] }}</li>
                        <hr>
                        <li><i class="fa fa-tag"></i>{{ $posts['category'] }}</li>
                        <hr>
                        <li><i class="fa fa-tag"></i>{{ $posts['date'] }}</li>
                    </ul>
                    <hr>
                </div>
            </article>
            <p>Description :</p>
            <p>{{ $posts['description'] }}</p>

            <hr class="btmspace-80">

            <div class="clear"></div>




            <div id="comments">
                <h2>All Comments</h2>
                <ul>
                    @foreach ($coments as $coment)
                        <li>

                            <article>
                                <header>
                                    <address>
                                        By <a href="#">{{$coment->name}}</a>
                                        By <a href="#">{{$coment->email}}</a>
                                    </address>
                                    <time datetime="">{{$coment->date}}</time>
                                </header>
                                <div class="comcont">
                                    <p>{{$coment->coment}}</p>
                                </div>
                            </article>

                        </li>
                    @endforeach

                </ul>
                <hr>
                <h2>Write A Comment</h2>
                <form action="{{ route('add_coment') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $posts['id'] }}">
                    <div class="one_third first">
                        <label for="name">Name <span>*</span></label>
                        <input type="text" name="name" id="name" value="" size="22" required>
                    </div>
                    <div class="one_third">
                        <label for="email">Mail <span>*</span></label>
                        <input type="email" name="email" id="email" value="" size="22" required>
                    </div>
                    <div class="block clear">
                        <label for="comment">Your Comment</label>
                        <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
                    </div>
                    <div>
                        <input type="submit" name="submit" value="Send review">
                        &nbsp;
                        <input type="reset" name="reset" value="Reset Form">
                    </div>
                </form>
            </div>
        </main>
    @endsection
