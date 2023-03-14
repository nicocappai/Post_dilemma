<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{


    public function __construct(){
        $this->middleware('auth')->except('index', 'show', 'articleByCategory', 'articleByUser', 'articleSearch');
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
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4|max:50',
            'subtitle' => 'required|min:4|max:55',
            'body' => 'required|min:4|max:20000',
            'category' => 'required',
            'tags' => 'required|min:3|max:50',

        ],
        [
            'title.required' => 'Il titolo é richiesto',
            'subtitle.required' => 'Il sottotitolo é richiesto',
            'body.required' => 'Il testo é richiesto',
            'tags.required' => 'I tag sono richiesti',
            'title.min' => 'Il titolo deve essere più lungo di 3 caratteri',
            'subtitle.min' => 'Il sottotitolo deve essere più lungo di 3 caratteri',
            'body.min' => 'Il testo deve essere più lungo di 3 caratteri',
            'tags.min' => 'I tag devono essere più lunghi di 3 caratteri',
            'title.max' => 'Il titolo deve essere al massimo di 50 caratteri',
            'subtitle.max' => 'Il sottotitolo deve essere al massimo di 55 caratteri',
            'body.max' => 'Il testo deve essere al massimo di 20.000 caratteri',
            'tags.max' => 'I tag devono essere al massimo di 50 caratteri',
        ]);


        $article = Article::create([
          'title'=>$request->title,
          'subtitle'=>$request->subtitle,
          'body'=>$request->body,
          'img'=> $request->has('img') ? $request->file('img')->store('public') : 'img/default.png' ,
          'category_id'=>$request->category,
          'user_id'=> Auth::user()->id,
          'slug' => Str::slug($request->title),
        ]);

        $tags = explode(', ', $request->tags);
        foreach ($tags as $tag) {
            $newTag = Tag::updateOrCreate([
             'name' => $tag
            ]);
        $article->tags()->attach($newTag);

        }

        return redirect(route('homepage'))->with('message','Articolo inviato correttamente in revisione');
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
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        
        $request->validate([
            'title' => 'required|min:4|max:50|' ,
            'subtitle' => 'required|min:4|max:55|',
            'body' => 'required|min:4|max:20000',
            'img' => 'img',
            'category' => 'required',
            'tags' => 'required|min:3|max:50',

        ]);

        $article->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'category_id' => $request->category,
            'slug' => Str::slug($request->title),

        ]);

        if($request->img){
            Storage::delete($article->img);
            $article->update([
                'img' => $request->file('img')->store('public/img')
            ]);
        }

        $tags = explode(', ', $request->tags);
        $newTags = [];

        foreach ($tags as $tag) {
            $newTag = Tag::updateOrCreate([
             'name' => $tag,
            ]);
            $newTags[] = $newTag->id;
        }

        $article->tags()->sync($newTags);

        return redirect(route('writer.dashboard'))->with('message', 'Hai correttamente aggiornato l\'articolo scelto');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        foreach ($article->tags as $tag) {
            $article->tags()->detach($tag);
        }
        $article->delete();
        return redirect(route('writer.dashboard'))->with('message','Hai correttamente eliminato l\'articolo scelto');
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
