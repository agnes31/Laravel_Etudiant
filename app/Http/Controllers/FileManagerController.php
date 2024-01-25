<?php

namespace App\Http\Controllers;

use App\Models\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $files = FileManager::orderBy('created_at', 'desc')->paginate(10);
        return view('fileManager.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fileManager.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required|min:5|max:500',
            'title_fr'  => 'required|min:5|max:500'
        ]);

        FileManager::create([
            'title'        => $request->title,
            'title_fr'     => $request->title_fr,
            'date'         => date('Y-m-d H:i:s'),
            'user_id'      => Auth::user()->id
        ]);

        return redirect()->route('fileManager.index')->withSuccess('success', 'Fichier a été ajouté!');
    }

    /**
     * Display the specified resource.
     */
    public function show(FileManager $fileManager)
    {
        return view('fileManager.show', compact('fileManager'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FileManager $fileManager)
    {
        if (Auth::user()->id != $fileManager->user_id) {
            return redirect()->route('fileManager.index')->withErrors('error', 'Vous n\'avez pas le droit de modifier ce document!');
        }
        return view('fileManager.edit', ['fileManager' => $fileManager]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FileManager $fileManager)
    {
        $request->validate([
            'title'     => 'required|min:5|max:500',
            'title_fr'  => 'required|min:5|max:500'
        ]);

        $fileManager->update([
            'title'     => $request->title,
            'title_fr'  => $request->title_fr
        ]);

        return redirect()->route('fileManager.index')->withSuccess('success', 'Fichier a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FileManager $fileManager)
    {
        if (Auth::user()->id != $fileManager->user_id) {
            return redirect()->route('fileManager.index')->withErrors('error', 'Vous n\'avez pas le droit de supprimer ce document!');
        }

        $fileManager->delete();
        return redirect()->route('fileManager.index')->withSuccess('success', 'Article a été supprimé!');
    }

    public function pagination()
    {
        $fileManager = FileManager::paginate(10);
        return view('fileManager.index', ['fileManager' => $fileManager]);
    }
}
