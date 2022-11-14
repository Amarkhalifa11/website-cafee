<!DOCTYPE html>
<!--
Template Name: Skaxis
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->

<head>
    <title>news</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('frontend/layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- Top Background Image Wrapper -->
    <div class="bgded overlay light"
        style="background-image:url('{{ asset('frontend/images/demo/6.jpg') }}');">
        <!-- ################################################################################################ -->
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <!-- ################################################################################################ -->
                <div id="logo" class="fl_left">
                    <h1><a href="/">Amar news</a></h1>
                </div>
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                        <li class=""><a href="/">Home</a></li>
                        <li><a class="drop" href="#">Category</a>
                            

                            <ul>
                                <li><a href="{{ route('all_posts.category', ['category'=> 'sport']) }}">sport</a></li>
                                <li><a href="{{ route('all_posts.category', ['category'=> 'economy']) }}">economy</a></li>
                                <li><a href="{{ route('all_posts.category', ['category'=> 'artist']) }}">artist</a></li>
                                <li><a href="{{ route('all_posts.category', ['category'=> 'social']) }}">social</a></li>
                            </ul> 

                        </li>
                        <li>
                            <a href="{{ route('all_posts') }}">Posts</a>
                        </li>
                        <li><a href="/about">About us</a></li>
                        <li><a href="{{ route('login') }}">Dashboard</a></li>
                    </ul>
                </nav>
                <!-- ################################################################################################ -->
            </header>
        </div>