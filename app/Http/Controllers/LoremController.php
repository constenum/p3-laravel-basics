<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoremController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lorem.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        # Validation
        $this -> validate($request, [
                'number' => 'required|min:1',
            ]);

        # Form Data
        $radio = $request->input('rbgroup');
        $number = $request->input('number');

        # Logic
        $generator = new Badcow\LoremIpsum\Generator();

        if ($radio == 'word') {
            $words = $generator->getWords($number);
            echo implode('<p>', $words);
        }
        if ($radio == 'sentence') {
            $sentences = $generator->getSentences($number);
            echo implode('<p>', $sentences);
        }
        if ($radio == 'paragraph') {
            $paragraphs = $generator->getParagraphs($number);
            echo implode('<p>', $paragraphs);
        }

        # Redirect back to index page
        return \Redirect::to('/lorem');
    }
}
