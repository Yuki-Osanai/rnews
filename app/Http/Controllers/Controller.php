<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function counts($user) {
        $count_newsposts = $user->newsposts()->count();
        $count_favorite = $user->favoritings()->count();

        return [
            'count_newsposts' => $count_newsposts,
            'count_favoritings' => $count_favoritings,
        ];
        
        $count_newsposts = $user->newsposts()->count();

        return [
            'count_newsposts' => $count_newsposts,
        

        ];
    }
}