<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{

    /**
     * Index page for the word score calculator.
     *
     * GET /
     */
    public function index(Request $request) {
        return view('word.index');
    }

    public function calculate(Request $request) {

        /**
         * Validations:
         *  - We only validate word in dictionary if user requested it
         */
        $valid_word = $request->has('dictVerify') ? "|valid_word" : "";

        $this->validate($request, [
            'multiplier'    => "required|numeric",
            'word'          => "required|min:2|alpha".$valid_word,
            'valid_word'    => "Your word is not valid in the scrabble dictionary.",
        ]);

        /* Generate score */
        $scrabbleWord = new \App\MyClasses\ScrabbleWord($request->input('word'));
        $multInteger  = intval($request->input('multiplier'));
        $bingoBool    = $request->has('bingoPoints');
        $score        = $scrabbleWord->score($multInteger, $bingoBool);

        /* Render the result */
        return view('word.index')->with([
            'word'          => $request->input('word'),
            'multiplier'    => $request->input('multiplier'),
            'dictVerify'    => $request->input('dictVerify'),
            'bingoPoints'   => $request->input('bingoPoints'),
            'score'         => $score,
        ]);
    }
}
