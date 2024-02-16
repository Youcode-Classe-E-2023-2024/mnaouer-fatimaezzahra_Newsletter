<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subscriber;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function showDashboard(){
        return view('dashboard');
    }

    //envoyer session users avec toute la liste des users
    public function ListeUser(){
        $users = User::all();

//        dump($userRoles);
        return view('listeUser', compact('users'));

    }

    public function ListeSub(subscriber $subscriber){

        return view('listeSubscriber')->with('subscriber', $subscriber->all());
    }

    public function selectRole(User $user){
//        dd($user);
        $roles = Role::all();
//        dd($role);
        return view('selectRole', compact('user', 'roles'));

    }

    public function assign_Role(Request $request){
//        dd($request);
        if()
        $user = User::find($request->id);
        $user->assignRole($request->role);

        return redirect()->route('show.users')->with('success', 'Role Assigned.');
    }
}
