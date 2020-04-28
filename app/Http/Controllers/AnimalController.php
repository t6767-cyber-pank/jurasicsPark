<?php

namespace App\Http\Controllers;

use App\animal;
use App\Animal\AnimalClass;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Вывод всех животных
     */
    public function index()
    {
        return animal::selAll()->get();
    }


    /**
     * В этой ситуации не нужен
     */
    public function create()
    {
    }


    /**
     */
    public function store( Request $request )
    {
        $animalRequest = new AnimalClass( $request );
        animal::create( $animalRequest->request->all() );
        return $this->index();
    }


    /**
     * В этой ситуации не нужен пока
     */
    public function show( $id )
    {
    }


    /**
     * В этой ситуации не нужен пока
     */
    public function edit( $id )
    {
    }


    /**
     * Изменение животного. (Странно но возможно. Всяко бывает Считали пингвином оказался заяц)
     */
    public function update( Request $request, $id )
    {
        $animal        = animal::find( $id );
        $animalRequest = new AnimalClass( $request );
        $animal->update( $animalRequest->request->all() );
        return $this->index();
    }


    /**
     * Удаление животного
     */
    public function destroy( $id )
    {
        $animal = animal::find( $id );
        $animal->delete();
        return $this->index();
    }
}
