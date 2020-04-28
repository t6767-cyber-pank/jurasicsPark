<?php
namespace App\Animal;

use Illuminate\Http\Request;

class AnimalClass
{
    public $request;


    public function __construct( Request $request )
    {
        $request->validate( [
                                'name'        => 'required',
                                'description' => 'required',
                            ] );

        $this->request = $request;
    }
}


?>
