<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Newspost;

class NewspostsController extends Controller
{
   
    public function index()
    {
         $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $newsposts = $user->newsposts()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'newsposts' => $newsposts,
            ];
            $data += $this->counts($user);
            return view('users.show', $data);
        }else {
            return view('welcome');
        }
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
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        //
=======
      //
>>>>>>> origin
    }

   
    public function destroy($id)
     {
        $newspost = \App\Newspost::find($id);

        if (\Auth::id() === $newspost->user_id) {
            $newspost->delete();
        }

        return redirect()->back();
    }
}
