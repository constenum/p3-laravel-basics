<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Badcow\LoremIpsum\Generator;

class LoremController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lorem.index')->with('results', session('results'));
    }

    /**
     * Show a newly created resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        # Form Data
        $radio = $request->input('radioButton');
        $number = $request->input('numberOfWords,Sentences,OrParagraphs');

        # Validation
        $this -> validate($request, [
                'radioButton' => 'required',
                'numberOfWords,Sentences,OrParagraphs' => 'required|integer|min:1|max:12',
            ]);

        # Logic
        $generator = new Generator();

        if ($radio == 'word') {
            $results = $generator->getRandomWords($number);
        }
        if ($radio == 'sentence') {
            $results = $generator->getSentences($number);
        }
        if ($radio == 'paragraph') {
            $results = $generator->getParagraphs($number);
        }

        return \Redirect::to('lorem')->with('results', implode('<p>', $results));
    }
}
