<?php

namespace App\Http\Controllers;

use App\animal;
use App\animal_category;
use Illuminate\Http\Request;

class AnimalCategoryController extends Controller
{
    /*
    Все категории
    */
    public function index()
    {
        $animalCategory = animal_category::all()->toJson();
        return $animalCategory;
    }


    /*
    */
    public function create()
    {
        //
    }


    /*
    */
    public function store( Request $request )
    {
        //
    }


    /*
     Вместо поиска категории по короткому имени идет поиск записей этой категории
    */
    public function show( $id )
    {
        if( $id == 0 ) {
            $Animals = animal::selAll()->get();
        } else {
            $Animals = animal::selAll()->where( "id_category", $id )->get()->toJson();
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
