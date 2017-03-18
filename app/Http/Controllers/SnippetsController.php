<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snippet;
use Illuminate\Support\Facades\Auth;

class SnippetsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $snippets = Snippet::latest()->get();
        return view('snippets.index', compact('snippets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Snippet $snippet)
    {
        return view('snippets.create', compact('snippet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $snippet = new Snippet();
        $snippet->title = request('title');
        $snippet->body = request('body');
        $snippet->forked_id = request('forked_id', null);

        $user = Auth::user();

        $user->snippets()->save($snippet);

        return redirect()->home();
    }

    /**
     * Display the specified resource.
     *
     * @param Snippet $snippet
     * @return \Illuminate\Http\Response
     */
    public function show(Snippet $snippet)
    {
        return view('snippets.show', compact('snippet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Snippet $snippet
     * @return \Illuminate\Http\Response
     */
    public function edit(Snippet $snippet)
    {
        if ($snippet->user_id != Auth::user()->id) {
            return redirect()->home();
        }

        return view('snippets.edit', compact('snippet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $snippet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Snippet $snippet)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $snippet->title = request('title');
        $snippet->body = request('body');
        $snippet->forked_id = request('forked_id', null);

        $user = Auth::user();

        $user->snippets()->save($snippet);

        return redirect()->home();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
