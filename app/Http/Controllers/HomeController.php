<?php

namespace App\Http\Controllers;

use App\animal;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware( 'auth' );
    }


    public function index()
    {
        return view( 'home' );
    }
}
