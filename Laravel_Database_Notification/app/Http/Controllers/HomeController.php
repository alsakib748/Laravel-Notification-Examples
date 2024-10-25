<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\UserFollowNotification;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function notify(){

        if(auth()->user()){
            $user = User::whereId(2)->first();

            auth()->user()->notify(new UserFollowNotification($user));

        }

        dd('Done');
    }

    public function markAsRead($id){
        if($id){
            auth()->user()->notifications->where('id',$id)->markAsRead();
        }
        return back();
    }

}
