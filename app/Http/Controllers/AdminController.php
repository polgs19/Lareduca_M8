<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    
    public function dashboard()
    {
        // Devuelve la vista 'dashboard-admin' para el panel de administración
        return view('dashboard-admin');
    }
}
