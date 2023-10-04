<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\InstagramImg;

class InstagramImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title_page = "All InstagramImgs";
        $instagramImgs = InstagramImg::get();
        return view("InstagramImgs.index",compact("instagramImgs" ,"title_page"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("InstagramImgs.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->image;
        $url = $request->url;
        InstagramImg::create( [
            "image"=>$image,
            "url"=>$url,
        ] );
        return redirect( "/InstagramImg" );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $InstagramImgs = InstagramImg::where( 'id', $id )->first();
        return view ("InstagramImgs.details",compact("InstagramImgs"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $InstagramImgs = InstagramImg::where("id",$id)->first();
        return view("InstagramImgs.edit",compact("InstagramImgs"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = $request->image;
        $url = $request->url;
        InstagramImg::where("id",$id)->update( [
            "image"=>$image,
            "url"=>$url,
        ] );
        return redirect( "/InstagramImg" );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        InstagramImg::where("id",$id)->delete();
        return redirect( "/InstagramImg" );


    }
}