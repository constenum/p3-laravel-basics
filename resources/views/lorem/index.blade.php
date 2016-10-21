@extends('layouts.master')

@section('title', 'Lorem Ipsum Generator')

{{-- Page content --}}
@section('content')
<div class="container">

    <img src="/img/web_developer_tools.jpg" class="img-responsive home-img" alt="Developer Tools">
    <h1>Lorem Ipsum Generator</h1>
    <div class="well">
        <p>
            To generate Lorem Ipsum text, select whether you want words, sentences, or paragraphs by checking the appropriate button. Then type the number
            of words, sentences, or paragraphs you would like to be displayed. The minimum number is 1 and the maximum number is 15.
        </p>
    </div>

    <form method='POST' action='/lorem'>
        {{ csrf_field() }}

        <div class="form-group">
            <div class="radio-inline">
                <label><input type="radio" name="rbgroup" value="word" {{ old('rbgroup.1')=="word" ? 'checked' : ''}}>Generate Words</label>
            </div>
            <div class="radio-inline">
                <label><input type="radio" name="rbgroup" value="sentence" {{ old('rbgroup.2')=="sentence" ? 'checked' : ''}}>Generate Sentences</label>
            </div>
            <div class="radio-inline">
                <label><input type="radio" name="rbgroup" value="paragraph" {{ old('rbgroup.3')=="paragraph" ? 'checked' : ''}}>Generate Paragraphs</label>
            </div>
        </div>

        <div class="form-group">
            <label for="number">Number of words, sentences or paragraphs to be generated</label>
            <input type="text" class="form-control" id="number" name="number" placeholder="Enter number of words, sentences, or paragraphs">
        </div>

        @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="results">
        <?php
        if(isset($results)) {
            echo $results;
        }
        ?>
    </div>
</div>
@endsection
