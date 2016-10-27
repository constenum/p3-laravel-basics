@extends("layouts.master")

@section("title", "xkcd Password Generator")

{{-- Page content --}}
@section("content")
<div class="container">

    <img src="/img/web_developer_tools.jpg" class="img-responsive home-img" alt="Developer Tools">
    <h1>xkcd Password Generator</h1>
    <div class="well">
        <p>
            To generate a xkcd password, enter the number of words, between 4 and 8, to be included
            in the password. Additionally, select any options. The results will be displayed below
            the form.
        </p>
    </div>

    <form method="POST" action="/xkcd">
        {{ csrf_field() }}

        <fieldset class="border">
            <legend class="border">Number of xkcd Password Words</legend>
            <div class="form-group">
            <input type="number" class="form-control" id="number" name="numberOfWords"
                placeholder="Enter number of words">
            </div>
        </fieldset>

        <fieldset class="border">
            <legend class="border">xkcd Password Options</legend>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label><input type="checkbox" name="digitsCheckbox" id="digits" value="digits"> Add digit(s) to the last word</label>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <label>How many digits (between 1 and 9) </label>
                        <input type="number" name="numberOfDigits">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label><input type="checkbox" name="symbolsCheckbox" id="symbols" value="symbols"> Add digit(s) to the last word</label>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <label>How many symbols (between 1 and 3) </label>
                        <input type="number" name="numberOfSymbols">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label><input type="checkbox" name="capitalize" id="capitalize"> Capitalize the first letter of each word</label>
                    </div>
                </div>
            </div>
        </fieldset>

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <button type="submit" class="btn btn-primary btn-lg btn-marg">Generate xkcd Password</button>
    </form>
    <br>

    @if (isset($results))
        <h3>Lorem Ipsum</h3>
        <p>
            <div class="well well-lg">
                <p class="xkcd">
                    {!! $results !!}
                </p>
            </div>
        </p>
    @endif
</div>
@endsection
