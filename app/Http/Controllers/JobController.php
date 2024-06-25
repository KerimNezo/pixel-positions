<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::query()
        ->latest()
        ->with(['employer', 'tags'])
        ->get()->groupBy('featured'); // ovdje ih grupisemo po atributu

        return view('jobs.index', [
            'jobs' => $jobs[1],
            'featured_jobs' => $jobs[0],
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $attributes = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Part Time', 'Full Time'])],
            'url' => ['required', 'url'],
            'tags' => ['nullable'],
        ]);

        if($request->has('Featured')) {
            $attributes['Featured'] = 0;
        } else {
            $attributes['Featured'] = 1;
        }

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));
        // ovako storeamo posao u bazu, ali kako tačno ovo radi
        /*
        Buduci da svaki jedan user ima jednog samo employera, preko ove auth funckije, uzimamo employera od trenutno loginovag usera
        (ako nije user loginaovan ovdje pada request), mozemo koristiti tako jobs() funkciju koju employer model ima, koja stvara
        preko koje mozemo stvoriti novi record u bazi podataka.

        create() je bazna funkcija svih eloquent modela, koja u biti kreira zapis TOG MODELA U BAZI
        */

        if($attributes['tags'] ?? false) { //front-end i front end i frontend tri razlicita taga, nema smisla
            foreach (explode(',',$attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        } // u formi primamo tagove kao string, gdje su tagovi odvojeni zarezon (frontend, bekend, baza) i ovdje samo taj string parčamo i uzimamo tekst i pretvaramo ga u tagove

        return redirect('/');
    }

}
