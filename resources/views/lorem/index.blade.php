@extends("layouts.master")

@section("title", "Lorem Ipsum Generator")

{{-- Page content --}}
@section("content")
<div class="container">
    <img src="/img/web_developer_tools.jpg" class="img-responsive home-img" alt="Developer Tools">
    <h1>Lorem Ipsum Generator</h1>
    <div class="well">
        <p>
            To generate Lorem Ipsum text, select whether to generate words, sentences, or paragraphs
            by checking the appropriate button. Then enter the number of words, sentences, or
            paragraphs to be displayed. The minimum number of words, sentences, or paragraphs
            is 1 and the maximum number of words, sentences or paragraphs is 12. The Lorem Ipsum
            text will be displayed below the form.
        </p>
    </div>

    <form method="POST" action="/lorem">
        {{ csrf_field() }}

        <fieldset class="border">
            <legend class="border">Select Words, Sentences, or Paragraphs</legend>
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

        <fieldset class="border">
            <legend class="border">Enter Number of Words, Sentences of Paragraphs</legend>
            <div class="form-group">
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

        <button type="submit" class="btn btn-primary btn-lg btn-marg">Generate Lorem Ipsum</button>
    </form>
    <br>

    @if (isset($results))
        <h3>Lorem Ipsum</h3>
        <p><div class=\"well well-lg\">
        {{!! $results !!}}
        </div></p>
    }
    @endif
</div>
@endsection
