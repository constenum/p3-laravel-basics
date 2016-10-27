<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class XkcdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('xkcd.index')->with('results', session('results'));
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
        $number = $request->input('numberOfWords');
        $digit = $request->input('numberOfDigits');
        $symbol = $request->input('numberOfSymbols');

        # Validation
        $this -> validate($request, [
                'numberOfWords' => 'required|integer|min:4|max:8',
                'digitsCheckbox' => 'required_with:numberOfDigits',
                'numberOfDigits' => 'required_with:digitsCheckbox|integer|min:1|max:9',
                'symbolsCheckbox' => 'required_with:numberOfSymbols',
                'numberOfSymbols' => 'required_with:symbolsCheckbox|integer|min:1|max:3',
            ]);

        # Logic
        $word_list = [];
        $file = file_get_contents('./csv/word_list.csv');
        $lines = explode(PHP_EOL, $file);
        foreach ($lines as $line) {
            $word_list = str_getcsv($line);
        }

        $numbers_list = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
        $symbols_list = ['(', ')', '`', '~', '!', '@', '#', '$', '%', '^', '&', '*', '-', '+', '=', '|', '\\', '{', '}', '[', ']', ':', ';'];

        $rand_words = '';

        for ($i = 1; $i <= $number; $i++) {
	    	$rand_keys = array_rand($word_list, 1);
	    	$rand_words .= $word_list[$rand_keys]. ' ';
        }

        $results = rtrim($rand_words);

        if ($request->has('digitsCheckbox')) {
			for ($i = 1; $i <= $digit; $i++) {
		    	$rand_keys = array_rand($numbers_list, 1);
		    	$results .= $numbers_list[$rand_keys];
			}
		}

		if ($request->has('symbolsCheckbox')) {
			for ($i = 1; $i <= $symbol; $i++) {
		    	$rand_keys = array_rand($symbols_list, 1);
		    	$results .= $symbols_list[$rand_keys];
			}
		}

		if ($request->has('capitalize')) {
			$results = ucwords($results);
		}

        return \Redirect::to('xkcd')->with('results', $results);
    }
}
