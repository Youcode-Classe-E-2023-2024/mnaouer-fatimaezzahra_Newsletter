<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subscriber;

class DashboardController extends Controller
{
    public function showDashboard(){
        return view('dashboard');
    }

    //envoyer session users avec toute la liste des users
    public function ListeUser(User $users){
        return view('listeUser')->with('users', $users->all());

    }

    public function ListeSub(subscriber $subscriber){

        return view('listeSubscriber')->with('subscriber', $subscriber->all());
    }
}
