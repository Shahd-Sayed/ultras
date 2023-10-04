<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Testimional;

class TestimionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $title_page = "All Testimionals";
        $testimionals = Testimional::get();
        return view("testimionals.index",compact("testimionals" ,"title_page"));

    }

    public function create() {
        return view( 'testimionals.create' );
    }

    public function store( Request $request ) {
        $name = $request->name;
        $description = $request->description;
        Testimional::create( [
            "name"=>$name,
            "description"=>$description,
        ] );
        return redirect( "/Testimionals" );

    }
    public function show( $id ) {
        // show the data from DB
        $testimionals = Testimional::where( 'id', $id )->first();
        return view ("testimionals.details",compact("testimionals"));

    }
}
