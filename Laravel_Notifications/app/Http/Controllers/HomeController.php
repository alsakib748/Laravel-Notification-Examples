<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\WelcomeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{

    public function index(){

        // todo: One way to send in single user
        // $user = User::find(1);

       // Notification::send($user, new WelcomeNotification);

        // $user->notify(new WelcomeNotification('You are welcome to your website'));

        // todo: Second way to send in single user

        $users = User::get();

        $post = [
            'title' => "The future of the AI",
            "slug" => "future-ai"
        ];

        foreach($users as $user){
            // todo: one way
            // Notification::send($user, new WelcomeNotification($post));

            // todo: another way
            $user->notify(new WelcomeNotification($post));
        }

        dd('done');

        // return view('welcome');
    }

}
