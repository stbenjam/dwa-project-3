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
        $this->validate($request, [
            'word' => 'required|min:2|alpha_num'
        ]);
    }
}
