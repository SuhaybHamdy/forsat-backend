<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Http\Requests\StoreFavouriteRequest;
use App\Http\Requests\UpdateFavouriteRequest;
use App\Http\Requests\FavoriteRequest;
use App\Http\Resources\Favorite as FavoriteResource;
use App\Http\Resources\FavoriteCollection;
use Illuminate\Http\Request;
use App\Models\Favorite;



class FavouriteController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return FavoriteCollection
     */
    public function index(Request $request)
    {
        $user = $request->user();
        return new FavoriteCollection($user->favorites);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param FavoriteRequest $request
     * @return FavoriteResource
     */
    public function store(FavoriteRequest $request)
    {
        $favorite = Favourite::create([
           'user_id' => $request->user_id,
           'opportunity_id' => $request->opportunity_id
        ]);

        return new FavoriteResource($favorite);
    }

    /**
     * Display the specified resource.
     *
     * @param Favorite $favorite
     * @return FavoriteResource
     */
    public function show(Favourite $favorite)
    {
        return new FavoriteResource($favorite);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param FavoriteRequest $request
     * @param Favorite $favorite
     * @return FavoriteResource
     */
    public function update(FavoriteRequest $request, Favourite $favorite)
    {
        $favorite->update([
            'user_id' => $request->user_id,
            'opportunity_id' => $request->opportunity_id
        ]);

        return new FavoriteResource($favorite);
    }
}
