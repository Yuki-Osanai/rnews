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
    
 public function mypage()
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
            return view('newsposts.newsposts', $data);
        }else {
            return view('welcome');
        }
    }

    
     public function ichiran()
    {
         $data = [];
        if (\Auth::check()) {
            $newsposts = NewsPost::all();
            $data = [
                'newsposts' => $newsposts,
            ];
            return view('newsposts.ichiran', $data);
        }else {
            return view('welcome');
        }
    }
    //ranking
     public function rank()
    {
         $ranks = \DB::table('user_favorite')->join('newsposts', 'user_favorite.favorite_id', '=', 'newsposts.id')->select('newsposts.*', \DB::raw('COUNT(*) as count'))->groupBy('newsposts.id', 'newsposts.user_id', 'newsposts.content', 'newsposts.title', 'newsposts.url','newsposts.created_at', 'newsposts.updated_at')->orderBy('count', 'DESC')->take(10)->get();
         return view('Ranking.ranking', [
            'items' => $newsposts,
        ]);
        } 
    
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {

  

        $this->validate($request, [
            'content' => 'required|max:191',
             'title' => 'required|max:191',
              'url' => 'required|max:191',
        ]);
        $request->user()->newsposts()->create([
            'content' => $request->content,
             'url' => $request->url,
             'title' => $request->title,
        ]);

        return redirect('ichiran');

            

    }
    public function show($id)
    {
        $comments = \App\Newspost::find($id);

        return view('comment.comment', [
            'newspost' => $comments,
        ]);
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
        $newspost = \App\Newspost::find($id);
        if (\Auth::id() === $newspost->user_id) {
            $newspost->delete();
        }
        return redirect()->back();
    }
}