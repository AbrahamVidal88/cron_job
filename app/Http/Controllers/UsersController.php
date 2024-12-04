<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Nombres;

class UsersController extends Controller
{
    public function show($id)
{
    try {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Usuario no encontrado',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $user,
        ], 200);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Error al obtener el usuario',
        ], 500);
    }
}
public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);

        try {
            $user = Nombres::create([
                'name' => $validatedData['name'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Usuario creado',
                'data' => $user,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error',
            ], 500);
        }
    }
}