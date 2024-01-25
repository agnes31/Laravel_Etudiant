<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
// use Spatie\FlareClient\View;

class CustomAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login'); // retourne la vue login
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $villes = Ville::all();
        return view('auth.create', ['villes' => $villes]); // retourne la vue create
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'min:6|max:20',
            //mettre autre relier avec etudiants
        ]);

        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password); // crypter le mot de passe
        $user->save();

        return redirect()->route('login')->withSuccess('success', 'Votre compte a bien été créé !');
    }

    /**
     * Display the specified resource.
     */
    public function authentification(Request $request)
    {
        $request->validate([
            'email' => 'email|required|exists:users',
            'password' => 'min:6|max:20',
        ]);

        $credentials = $request->only('email', 'password');

        if (!Auth::validate($credentials)) :
            return redirect(route('login'))
                ->withErrors(trans('auth.password'))->withInput();
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials); // récupérer l'utilisateur

        Auth::login($user); // connecter l'utilisateur - creer la session a chaque fois qu'on se connecte

        return redirect()->intended(route('home'))->withSuccess('Signed in');; // redirige vers la page d'ou on vient
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
