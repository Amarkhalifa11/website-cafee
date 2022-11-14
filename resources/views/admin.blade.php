        @extends('index')
        @section('content')
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <div id="pageintro" class="hoc clear">
                <!-- ################################################################################################ -->
                <div class="flexslider basicslider">
                    <ul class="slides">

                        <li>
                            <article>
                                <p>Hellow</p>
                                <h3 class="heading">Welcome to Ammar News</h3>
                                <p>Lacus non tincidunt class aptent taciti sociosqu</p>
                                <footer><a class="btn " href="{{ route('about') }}">About</a></footer>
                            </article>
                        </li>

                        <li>
                            <article>
                                <p>Posts</p>
                                <h3 class="heading">show all posts us</h3>
                                <p>Sodales sapien donec porttitor dolor nec elit</p>
                                <footer><a class="btn" href="{{ route('all_posts') }}">Show All Posts</a></footer>
                            </article>
                        </li>

                    </ul>
                </div>
                <!-- ################################################################################################ -->
            </div>
            <!-- ################################################################################################ -->
            </div>

            <div class="wrapper">
                <div class="hoc clear">
                    <!-- ################################################################################################ -->
                    <figure id="introblocks">
                        <ul class="nospace group">
                            <li class="one_third first"><a href="#"><img
                                        src="{{ asset('frontend/images/demo/1.jpg') }}" alt=""></a></li>
                            <li class="one_third"><a href="#"><img
                                        src="{{ asset('frontend/images/demo/11.webp') }}"alt=""></a></li>
                            <li class="one_third"><a href="#"><img
                                        src="{{ asset('frontend/images/demo/21.webp') }}"alt=""></a></li>
                        </ul>
                    </figure>
                    <p class="center"><a class="btn" href="{{ route('all_posts') }}">All news</a></p>
                    <!-- ################################################################################################ -->
                </div>


            </div>

            <div class="wrapper row3">
                <main class="hoc container clear">
                    <!-- main body -->
                    
                    <article class="group btmspace-80">
                        <div class="two_third first"><img class="borderedbox inspace-10"
                                src="{{ asset('frontend/images/demo/' . $single['image']) }}" alt=""></div>
                        <div class="one_third">
                            <h6 class="heading">{{$single['name']}}</h6>
                            <ul class="nospace meta">
                                <li><i class="fa fa-user"></i> <a href="#">{{$single['auther']}}</a></li>
                                <li><i class="fa fa-tag"></i> <a href="#">{{$single['date']}}</a></li>
                            </ul>
                            <hr>
                            @php
                            echo Str::limit($single['description'], 200, '...');
                            @endphp
                            <hr>
                            <footer class="nospace"><a class="btn" href="{{ route('single', ['id'=>$single['id']]) }}">Full Story &raquo;</a></footer>
                        </div>
                    </article>
                    <!-- ################################################################################################ -->
                    <hr class="btmspace-80">
                    <!-- ################################################################################################ -->
                    <ul class="nospace group overview">
                        @foreach ($posts as $post)
                            <li class="one_third">
                                <article><a href="#"><img src="{{ asset('frontend/images/demo/' . $post->image) }}"
                                            alt=""></a>
                                    <h6 class="heading">{{ $post->name }}</h6>
                                    <ul class="nospace meta">
                                        <li><i class="fa fa-user"></i> <a href="#">{{ $post->auther }}</a></li>
                                        <li><i class="fa fa-tag"></i> <a href="#">{{ $post->category }}</a></li>
                                    </ul>
                                    @php
                                        echo Str::limit($post->description, 100, '...');
                                    @endphp
                                    <footer class="nospace"><a class="btn"
                                            href="{{ route('single', ['id' => $post->id]) }}">Full Story &raquo;</a></footer>
                                </article>
                            </li>
                            @endforeach
                        </ul>
                        {{ $posts->links() }}
                    <!-- ################################################################################################ -->
                    <!-- / main body -->
                    <div class="clear"></div>
                </main>
            </div>
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <div class="wrapper bgded overlay coloured" style="background-image:url('images/demo/backgrounds/02.png');">
                <article class="hoc cta clear">
                    <!-- ################################################################################################ -->
                    <h6 class="three_quarter first">Follow us every day for a lot of news around the world</h6>
                    <footer class="one_quarter"><a class="btn" href="{{ route('about') }}">About us &raquo;</a></footer>
                    <!-- ################################################################################################ -->
                </article>
            </div>
        @endsection
