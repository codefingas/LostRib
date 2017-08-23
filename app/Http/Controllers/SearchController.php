<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * @return view() object for default search page;
    */
    public function index()
    {
        return view('search.index');
    }

    public function advanceIndex()
    {
        return view('search.advance.index');
    }

    public function processSearch(Request $request)
    {
        //process the search here based on the parameters passed in the search
        $searchResult = [];
        return view('search.results', compact('searchResult'));
    }

    public function processAdvanceSearch(Request $request)
    {
        //process the search here based on the parameters passed in the search
        $searchResult = [];
        return view('search.results', compact('searchResult'));
    }
}
