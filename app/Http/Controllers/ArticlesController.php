<?php

namespace CanRover\Http\Controllers;

use Illuminate\Http\Request;

use CanRover\Http\Requests\ArticleRequest;
use CanRover\Http\Controllers\Controller;

use Carbon\Carbon;

use CanRover\Article;

class ArticlesController extends Controller
{
    /**
     * Show all available news
     * 
     * @return Response
     */
    public function index() {
        $articles = Article::orderBy('created_at')->paginate(5);

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form to create a new article
     *
     * @return Response
     */
    public function create() {
        return view('mod.articles.create');
    }

    /**
     * Handle the creation of a new article
     *
     * @param  ArticleRequest $request
     * @return void
     */
    public function store(ArticleRequest $request) {
        $slug = str_slug($request->title);
        $request->merge(array('slug' => $slug));
        
        Article::create($request->all());

        flash()->success('Success!', 'Your article has been created');

        return redirect(sprintf('/articles/%s', $slug));
    }

    public function show($slug) {
        $article = Article::WithSlug($slug);

        return view('articles.show', compact('article'));
    }

    public function edit($slug) {
        $article = Article::WithSlug($slug);
        $time = Carbon::now();

        return view('mod.articles.edit', compact('article', 'time'));
    }

    public function update($slug, ArticleRequest $request) {
        $article = Article::WithSlug($slug);

        $article->updated_at = Carbon::now();

        $article->update($request->all());

        flash()->success('Success!', 'Your article has been updated');

        return redirect(sprintf('/articles/%s', $slug));
    }

    // public function destroy($slug) {

    // }
}
