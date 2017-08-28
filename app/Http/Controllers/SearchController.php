<?php

namespace App\Http\Controllers;

use App\SavedUserSearches;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * @return view() object for default search page;
    */
    public function index()
    {
        return 'search.index';
    }

    public function advanceIndex()
    {
        return 'search.advance.index';
    }

    public function processSearch(Request $request)
    {
        //process the search here based on the parameters passed in the search
        $searchResult = [];
        return 'search.results';
    }

    public function processAdvanceSearch(Request $request)
    {
        //process the search here based on the parameters passed in the search
        $searchResult = [];
        return 'searchResult';
    }

    public function saveUserSearch(Request $request)
    {
        $search = new SavedUserSearches();
        $search->saveSearch($request);
    }
}
