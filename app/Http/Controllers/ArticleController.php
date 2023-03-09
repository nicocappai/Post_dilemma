<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.index' , compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $request->validate([
        'title' => 'required|min:3',
        'subtitle' => 'required|min:3',
        'body' => 'required|min:3',
        'category' => 'required',
        ]);

           Article::create([
          'title'=>$request->title,
          'subtitle'=>$request->subtitle,
          'body'=>$request->body,
          'img'=> $request->has('img') ? $request->file('img')->store('public') : 'img/default.png' ,
          'category_id'=>$request->category,
          'user_id'=> Auth::user()->id,

        ]);

        return redirect(route('homepage'))->with('message','Articolo creato');
    }


    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }

    public function articleByCategory(Category $category){
        $articles = $category->articles->sortByDesc('created_at')->filter(function($article){
            return $article->is_accepted == true;
        });
        return view('article.category' , compact('category', 'articles'));
    }

    public function articleByUser(User $user){
        $articles = $user->articles->sortByDesc('created_at')->filter(function($article){
            return $article->is_accepted == true;
        });
        return view('article.byUser' , compact('user', 'articles'));
    }

    public function articleSearch (Request $request){
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->orderBy('created_at', 'desc')->get();

        return view('article.search-index',compact('articles', 'query'));
    }

}
