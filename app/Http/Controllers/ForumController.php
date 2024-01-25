<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forums = Forum::orderBy('created_at', 'desc')->paginate(10);
        return view('forum.index', compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|min:5|max:500',
            'title_fr'  => 'required|min:5|max:500',
            'body'      => 'required|min:5|max:1000',
            'body_fr'   => 'required|min:5|max:1000'
        ]);

        Forum::create([
            'title'        => $request->title,
            'title_fr'     => $request->title_fr,
            'body'         => $request->body,
            'body_fr'      => $request->body_fr,
            'date'         => now(),
            'user_id'      => Auth::user()->id
        ]);

        return redirect()->route('forum.index')->withSuccess('success', 'Article a été ajouté!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Forum $forum)
    {
        return view('forum.show', compact('forum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forum $forum)
    {
        if (Auth::user()->id != $forum->user_id) {
            return redirect()->route('forum.index')->withErrors('error', 'Vous n\'avez pas le droit de modifier cet article!');
        }
        return view('forum.edit', ['forum' => $forum]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forum $forum)
    {
        $request->validate([
            'title'     => 'required|min:5|max:500',
            'title_fr'  => 'required|min:5|max:500',
            'body'      => 'required|min:5|max:1000',
            'body_fr'   => 'required|min:5|max:1000'
        ]);

        $forum->update([
            'title'     => $request->title,
            'title_fr'  => $request->title_fr,
            'body'      => $request->body,
            'body_fr'   => $request->body_fr
        ]);

        return redirect()->route('forum.index')->withSuccess('success', 'Article a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum)
    {
        if (Auth::user()->id != $forum->user_id) {
            return redirect()->route('forum.index')->withErrors('error', 'Vous n\'avez pas le droit de supprimer cet article!');
        }

        $forum->delete();
        return redirect()->route('forum.index')->withSuccess('success', 'Article a été supprimé!');
    }

    public function pagination()
    {
        $forums = Forum::paginate(10);
        return view('forum.index', ['forums' => $forums]);
    }
}
