<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Muestra una lista de usuarios.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Muestra un usuario específico.
     */
    public function show($id)
    {
        return User::findOrFail($id);
    }
}
