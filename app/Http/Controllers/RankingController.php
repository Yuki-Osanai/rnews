<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankingController extends Controller
{
     public function ranking()
    {

       $newsposts = \DB::table('user_favorite')->join('newsposts', 'user_favorite.favorite_id', '=', 'newsposts.id')->select('newsposts.*', \DB::raw('COUNT(*) as count'))->groupBy('newsposts.id', 'newsposts.user_id', 'newsposts.url', 'newsposts.content', 'newsposts.title','newsposts.created_at', 'newsposts.updated_at')->orderBy('count', 'DESC')->take(10)->get();

return var_dump($newsposts);

        return view('Ranking.ranking', [
            'newsposts' => $newsposts,
        ]);
    }
}
