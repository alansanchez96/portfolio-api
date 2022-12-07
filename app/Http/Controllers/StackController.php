<?php

namespace App\Http\Controllers;

use App\Models\Stack;
use App\Http\Requests\StackRequest;
use App\Http\Controllers\Controller;

class StackController extends Controller
{
    public function stacks(StackRequest $request)
    {
        if ($request->hasFile('image')) {
            $img = $request->file('image')->store('stacks');
        } else {
            return response()->json([
                'status' => 0,
                'message' => 'Ocurrio un error. Verifica bien los campos.'
            ]);
        }

        Stack::create([
            'name' => $request->name,
            'state' => $request->state,
            'image' => 'storage/' . $img
        ]);

        return response()->json([
            'status' => 1,
            'message' => 'Se ha creado correctamente.'
        ]);
    }

    public function getAllStacks()
    {
        return Stack::all();
    }
}
