<?php

namespace App\Http\Controllers;

use App\animal;
use App\animal_view;
use Illuminate\Http\Request;

class AnimalViewController extends Controller
{
    /**
     * Взять все виды животных
     */
    public function index()
    {
        $animalView = animal_view::all()->toJson();
        return $animalView;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        //
    }


    /**
     * Поиск животных по короткому названию вида
     */
    public function show( $id )
    {
        if( $id == 0 ) {
            $Animals = animal::selAll()->get();
        } else {
            $Animals = animal::selAll()->where( "id_wiew", $id )->get();
        }
        return $Animals;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id )
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        //
    }
}
