<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Message;

class MessageController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $title_page = "All messages";
        $messages = Message::get();
        return view("Messages.index",compact("messages" ,"title_page"));

    }

    public function create() {
        return view( 'Messages.create' );
    }

    public function store( Request $request ) {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        Message::create( [
            "name"=>$name,
            "email"=>$email,
            "message"=>$message
        ] );
        return redirect( "/messages" );

    }
    public function show( $id ) {
        // show the data from DB
        $messages = Message::where( 'id', $id )->first();
        return view ("Messages.details",compact("messages"));

    }
}
