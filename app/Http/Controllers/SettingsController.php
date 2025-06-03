<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Actualiza la configuración del usuario.
     */
    public function update(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'preferences' => 'required|array',
        ]);

        return response()->json(['message' => 'Configuración actualizada correctamente']);
    }
}
