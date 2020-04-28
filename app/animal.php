<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class animal extends Model
{
    protected $fillable = [
        'name', 'description', 'id_category', 'id_wiew',
    ];


    public static function selAll()
    {
        $an = new animal();
        return $an::select(
            'animals.name',
            'animals.id',
            'animals.description',
            'animal_views.name as nameview',
            'animal_categories.name as namecat',
            'animals.id_category',
            'animals.id_wiew' )
                  ->join( 'animal_categories', 'animals.id_category', '=', 'animal_categories.id' )
                  ->join( 'animal_views', 'animals.id_wiew', '=', 'animal_views.id' );
    }
}
