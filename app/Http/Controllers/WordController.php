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
	public function index() {
		return view('word.index');
	}


	/**
	 * Calculate the score for a scrabble word.
	 *
	 * GET /calculate
	 */
    public function calculate() {
        return view('word.index');
	}
}
