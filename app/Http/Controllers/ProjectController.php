<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    public function createProject(ProjectRequest $request)
    {
        if ($request->hasFile('image')) {
            $img = $request->file('image')->store('projects');
        } else {
            return response()->json([
                'status' => 0,
                'message' => 'Ocurrio un error. Verifica bien los campos.'
            ]);
        }

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => 'storage/' . $img,
            'url' => $request->url
        ]);

        return response()->json([
            'status' => 1,
            'message' => 'Se ha creado correctamente.'
        ], 200);
    }

    public function getAllProjects()
    {
        return response()->json(Project::all(), 200);
    }

    public function updateProject(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        if (!isset($project)) {
            return response()->json([
                'status' => 0,
                'message' => 'Proyecto no encontrado'
            ]);
        }

        if ($request->hasFile('image')) {
            $img = $request->file('image')->store('projects');
        } else {
            return response()->json([
                'status' => 0,
                'message' => 'Ocurrio un error. Verifica bien los campos.'
            ]);
        }

        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => 'storage/' . $img,
            'url' => $request->url,
        ]);

        return response()->json([
            'status' => 1,
            'message' => 'Actualizado correctamente',
            'project' => $project
        ]);
    }

    public function destroyProject($id)
    {
        $project = Project::findOrFail($id);

        if (!isset($project)) {
            return response()->json([
                'status' => 0,
                'message' => 'Proyecto no encontrado'
            ]);
        }

        $project->delete();

        return response()->json([
            'status' => 1,
            'message' => 'Proyecto eliminado'
        ]);
    }
}