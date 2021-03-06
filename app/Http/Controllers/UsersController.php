<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        $users = User::all();

        return view('users.index', [
            'users' => $users,
        ]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        $user = User::find($id);
        $newsposts = $user->newsposts()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'newsposts' => $newsposts,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }
    


    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
    
    public function favorites($id)
    {
        $user = User::find($id);
        $favorites = $user->favorites()->paginate(10);

        $data = [
            'user' => $user,
            'newsposts' => $favorites,
        ];
        
        $data += $this->counts($user);
        return view('users.favorites', $data);
        
    }
}
