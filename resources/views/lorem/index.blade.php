@extends('layouts.master')

@section('title', 'Lorem Ipsum Generator')

{{-- Page content --}}
@section('content')
<div class="container">

    <img src="/img/web_developer_tools.jpg" class="img-responsive home-img" alt="Developer Tools">
    <h1>Lorem Ipsum Generator</h1>

    <form method='POST' action='/lorem'>

    {{ csrf_field() }}
    
    <div class="form-group">
        <div class="radio-inline">
            <label><input type="radio" name="rbgroup">Generate Words</label>
        </div>
        <div class="radio-inline">
            <label><input type="radio" name="rbgroup">Generate Sentences</label>
        </div>
        <div class="radio-inline">
            <label><input type="radio" name="rbgroup" checked="checked">Generate Paragraphs</label>
        </div>
    </div>

    <div class="form-group">
        <label for="numberOfWordsSentencesOrPagargraphs">Number of words, sentences or paragraphs to be generated</label>
        <input type="text" class="form-control" id="numberOfWordsSentencesOrPagargraphs" placeholder="Enter number of words, sentences, or paragraphs">
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
</div>
@endsection
