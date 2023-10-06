<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title_page = "All Sliders";
        $sliders = Slider::get();
        return view("Sliders.index",compact("sliders" ,"title_page"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Sliders.oldCreate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title=$request->title;
        $description=$request->description;
        $url=$request->url;
        $request->validate([
            "title"=>"required",
            "description"=>"required",
            "image"=>"required|mimes:jpg,jpeg,svg,png|max:5048",
            "url"=>"required",

        ]);



        $filename = time().$request->file('image')->getClientOriginalName();
        dd($filename);
        $path = $request->file('image')->storeAs('images',$filename,'public');
        $image = '/storage/'.$path;

        Slider::create( [
            "title"=>$title,
            "description"=>$description,
            "image"=>$image,
            "url"=>$url,
        ] );
        return redirect( "/Slider" );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sliders = Slider::where( 'id', $id )->first();
        return view ("Sliders.details",compact("sliders"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sliders = Slider::where("id",$id)->first();
        return view("Sliders.edit",compact("sliders"));

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
        $title = $request->title;
        $description = $request->description;
        $image = $request->image;
        $url = $request->url;
        Slider::where("id",$id)->update([
            "title"=>$title,
            "description"=>$description,
            "image"=>$image,
            "url"=>$url,
        ] );
        return redirect( "/Slider" );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::where("id",$id)->delete();
        return redirect( "/Slider" );


    }
}