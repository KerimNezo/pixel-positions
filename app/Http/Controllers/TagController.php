<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        // dd($tag->jobs[0]->title); // $tag->jobs vraća samo listu poslova

        return view('results', ['jobs' => $tag->jobs]);
    }
}
