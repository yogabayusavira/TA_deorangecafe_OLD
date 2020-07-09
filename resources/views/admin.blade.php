@extends('layouts.app')

@section('content')
        <div class="box7">
            <img src="https://img.freepik.com/free-vector/technology-banner-background-with-hexagonal-shapes-text-space_1017-22589.jpg?size=626&ext=jpg" alt="">
                <div class="box-content">
                <h3 class="title">Welcome back, {{ Auth::user()->name }}!</h3>
                <span class="post">What would you want today?</span>
                <ul class="icon">
                    <li><a href="#" class="fa fa-search"></a></li>
                    <li><a href="#" class="fa fa-link"></a></li>
                    <li><a href="#" class="fa fa-link"></a></li>
                </ul>
            </div>
        </div>
@endsection