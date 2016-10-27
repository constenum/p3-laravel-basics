@extends('layouts.master')

@section('title', 'Developer\'s Best Friend')

{{-- Page content --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="/img/web_developer_tools.jpg" class="img-responsive home-img" alt="Developer Tools">
            <div class="well well-lg home-well">
                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum has been an industry standard for dummy
                    text for many years.<sup>1</sup></p>
                <p>It is an established fact that a reader will be distracted by the readable content of
                    a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                    typical distribution of letters making it look like readable English.<sup>1</sup></p>
                <p> Use this developer tool to create lorem ipsum in a word list, entences, or paragrapsh</p>
            </div>
            <a href="{{ route('lorem.index') }}" class="btn btn-primary btn-lg btn-block btn-marg" role="button">Generate Lorem Ipsum</a>
            <br>
        </div>
        <div class="col-md-3">
            <img src="/img/web_developer_tools.jpg" class="img-responsive home-img" alt="Developer Tools">
            <div class="well well-lg home-well">
                <p>Random user data is simply dummy data used as a placeholder for real data. The data can
                    be used in place of sensitive data that cannot be viewed outside the production system
                    or simply for testing purposes. Randomly generated user data can easily be recreated if
                    a database has to be destroyed during testing.</p>
                <p>Use this developer tool to create random user data.</p>
            </div>
            <a href="{{ route('user.index') }}" class="btn btn-primary btn-lg btn-block btn-marg" role="button">Generate Random Users</a>
            <br>
        </div>
        <div class="col-md-3">
            <img src="/img/web_developer_tools.jpg" class="img-responsive home-img" alt="Developer Tools">
            <div class="well well-lg home-well">
                <p>Color harmony represents a satisfying balance or unity of colors. Combinations of colors that exist in harmony are
                    pleasing to the eye. The human brain distinguishes the visual interest and the sense of order created by the harmony
                    and forms a dynamic equilibrium.<sup>2</sup></p>
                <p>Use this developer tool to find color harmonies based on the standard color wheel.</p>
            </div>
            <a href="{{ route('color.index') }}" class="btn btn-primary btn-lg btn-block btn-marg" role="button">Generate Color Chords</a>
            <br>
        </div>
        <div class="col-md-3">
            <img src="/img/web_developer_tools.jpg" class="img-responsive home-img" alt="Developer Tools">
            <div class="well well-lg home-well">
                <p>A complex password is difficult to remember causing a lot of people use the same password
                    for multiple site. The xkcd password generator creates a random phase composed of words
                    that are easy to remember, but combined are hard to guess. This allows people to have a
                    different password for every website.</p>
                <p>Use this developer tool to create a unique xkcd password.</p>
            </div>
            <a href="{{ route('xkcd.index') }}" class="btn btn-primary btn-lg btn-block btn-marg" role="button">Generate xkcd Password</a>
            <br>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p><sup>1</sup> "Lorem Ipsum." - All the Facts. N.p., n.d. Web. 26 Oct. 2016. <a href="http://www.lipsum.com/">
                http://www.lipsum.com</a></p>
            <p><sup>2</sup> "Color Relationships: Creating Color Harmony" Sensational Color. N.p., 19 Mar. 2012. Web. 26 Oct. 2016.
                <a href="https://www.facebook.com/sensationalcolor">https://www.facebook.com/sensationalcolor</a></p>
        </div>
    </div>
</div>
@endsection
