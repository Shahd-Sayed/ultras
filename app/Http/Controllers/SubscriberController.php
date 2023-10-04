<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Subscriber;


class SubscriberController extends Controller
{
    public function index() {
        $title_page = "All subscribers";
        $subscribers = Subscriber::get();
        return view("subscribers.index",compact("subscribers" ,"title_page" ));

    }

    public function create() {
        return view( 'subscribers.create' );
    }

    public function store( Request $request ) {
        $email = $request->email;
        Subscriber::create( [
            "email"=>$email
        ] );
        return redirect( "/subscribers" );
    }
}
