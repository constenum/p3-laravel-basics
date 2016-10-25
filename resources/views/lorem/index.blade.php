@extends('layouts.master')

@section('title', 'Lorem Ipsum Generator')

{{-- Page content --}}
@section('content')
<div class="container">
    <img src="/img/web_developer_tools.jpg" class="img-responsive home-img" alt="Developer Tools">
    <h1>Lorem Ipsum Generator</h1>
    <div class="well">
        <p>
            To generate Lorem Ipsum text, select whether you want words, sentences, or paragraphs
            by checking the appropriate button. Then type the number of words, sentences, or
            paragraphs you would like to be displayed. The minimum number of words, sentences, or
            paragraphs is 1.
        </p>
    </div>
    <hr>
    <form method='POST' action='/lorem'>
        {{ csrf_field() }}

        <fieldset>
            <div class="form-group">
                <div class="radio-inline">
                    <label><input type="radio" name="radioButton" value="word">Generate Words</label>
                </div>
                <div class="radio-inline">
                    <label><input type="radio" name="radioButton" value="sentence">Generate Sentences</label>
                </div>
                <div class="radio-inline">
                    <label><input type="radio" name="radioButton" value="paragraph" checked="checked">Generate Paragraphs</label>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <div class="form-group">
                <label for="number">Number of words, sentences or paragraphs to be generated</label>
                <input type="number" class="form-control" id="number" name="numberOfWords,Sentences,OrParagraphs"
                    placeholder="Enter number of words, sentences, or paragraphs">
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

        <button type="submit" class="btn btn-primary">Generate Lorem Ipsum</button>
    </form>

    <?php
    if(isset($results)) {
        echo '<hr>';
        echo '<h3>Lorem Ipsum</h3>';
        echo '<p><div class="well well-lg">';
        echo $results;
        echo '</div></p>';
    } ?>
</div>
@endsection
