@extends('layouts.master')

@section('title', 'Developer\'s Best Friend')

{{-- Page content --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="/img/web_developer_tools.jpg" class="img-responsive home-img" alt="Developer Tools">
            <div class="well well-lg">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <a href="{{ route('lorem.index') }}" class="btn btn-primary btn-lg btn-block" role="button">Generate Lorem Ipsum</a>
        </div>
        <div class="col-md-3">
            <img src="/img/web_developer_tools.jpg" class="img-responsive home-img" alt="Developer Tools">
            <div class="well well-lg">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <a href="{{ route('user.index') }}" class="btn btn-primary btn-lg btn-block" role="button">Generate Random Users</a>
        </div>
        <div class="col-md-3">
            <img src="/img/web_developer_tools.jpg" class="img-responsive home-img" alt="Developer Tools">
            <div class="well well-lg">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <a href="{{ route('color.index') }}" class="btn btn-primary btn-lg btn-block" role="button">Generate Color Chords</a>
        </div>
        <div class="col-md-3">
            <img src="/img/web_developer_tools.jpg" class="img-responsive home-img" alt="Developer Tools">
            <div class="well well-lg">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <a href="{{ route('xkcd.index') }}" class="btn btn-primary btn-lg btn-block" role="button">Generate xkcd Password</a>
        </div>
    </div>
</div>
@endsection
