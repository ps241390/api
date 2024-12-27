<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Http\Resources\FilmResource;
use App\Http\Requests\StoreFilmRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class FilmController extends Controller
{
    /**
     * Alle films ophalen
     */
    public function index()
    {
        Log::info('Retrieving all films');
        $films = Film::orderBy('title')->paginate(10);
        return FilmResource::collection($films);
    }

    /**
     * Film toevoegen
     */
    public function store(StoreFilmRequest $request)
    {
        Log::info('Creating new film', $request->validated());
        $film = Film::create($request->validated());
        return new FilmResource($film);
    }

    /**
     * Film details bekijken
     */
    public function show(Film $film)
    {
        Log::info('Retrieving film details', ['id' => $film->id]);
        return new FilmResource($film);
    }
}
