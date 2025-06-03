<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Muestra el perfil de un usuario.
     */
    public function show($id)
    {
        return User::findOrFail($id);
    }

    /**
     * Actualiza el perfil de un usuario.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return response()->json(['message' => 'Perfil actualizado correctamente']);
    }
}
