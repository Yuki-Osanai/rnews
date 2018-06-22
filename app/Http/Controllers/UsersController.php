<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function favoritings($id)
    {
        $user = User::find($id);
        $favoritings = $user->favoritings()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $favoritings,
        ];

        $data += $this->counts($user);

        return view('users.favoritings', $data);
    }

    
}
