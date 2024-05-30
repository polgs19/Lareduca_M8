<?php

// app/Http/Controllers/JuegoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function bestGame()
    {
        return view('mejores-juegos');
    }
    public function act()
    {
        return view('actividades');
    }
    public function pianoGame()
    {
        return view('piano-game');
    }
    public function mathGame()
    {
        return view('math-game');
    }
    public function users()
    {
        return view('users');
    }
}
