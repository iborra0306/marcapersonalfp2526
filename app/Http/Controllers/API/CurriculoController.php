<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Curriculo;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use  App\Http\Resources\CurriculoResource;
use Illuminate\Support\Facades\Auth;

class CurriculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$curriculoData = json_decode($request->getContent(), true);
        $curriculoData = ['user_id' => Auth::user()->id];
        $curriculo = Curriculo::create($curriculoData);

        return new CurriculoResource($curriculo);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Curriculo $curriculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curriculo $curriculo)
    {

        abort_if (! Gate::allows('update-curriculo', $curriculo), 403);

        //$curriculoData = json_decode($request->getContent(), true);
        $curriculoData = ['user_id' => Auth::user()->id];
        $curriculo = $curriculo->update($curriculoData);

        return new CurriculoResource($curriculo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curriculo $curriculo)
    {
        //
    }
}
