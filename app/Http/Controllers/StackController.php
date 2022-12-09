<?php

namespace App\Http\Controllers;

use App\Models\Stack;
use Illuminate\Http\Request;
use App\Http\Requests\StackRequest;
use App\Http\Controllers\Controller;

class StackController extends Controller
{
    public function craeteStack(StackRequest $request)
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
        ], 200);
    }

    public function getAllStacks()
    {
        return response()->json(Stack::all(), 200);
    }

    public function updateStack(Request $request, $id)
    {
        $stack = Stack::findOrFail($id);

        if (!isset($stack)) {
            return response()->json([
                'status' => 0,
                'message' => 'Stack no encontrado'
            ]);
        }

        if ($request->hasFile('image')) {
            $img = $request->file('image')->store('stacks');
        } else {
            return response()->json([
                'status' => 0,
                'message' => 'Ocurrio un error. Verifica bien los campos.'
            ]);
        }

        $stack->update([
            'name' => $request->name,
            'state' => $request->state,
            'image' => 'storage/' . $img
        ]);

        return response()->json([
            'status' => 1,
            'message' => 'Actualizado correctamente',
            'stack' => $stack
        ]);
    }

    public function destroyStack($id)
    {
        $stack = Stack::findOrFail($id);

        if (!isset($stack)) {
            return response()->json([
                'status' => 0,
                'message' => 'Stack no encontrado'
            ]);
        }

        $stack->delete();

        return response()->json([
            'status' => 1,
            'message' => 'Stack eliminado'
        ]);
    }
}
