<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
        ]);

        $task = Task::create([
            'title' => $validated['title'],
            'is_completed' => false,
        ]);

        return response()->json($task, 201);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'is_completed' => 'required|boolean',
        ]);

        $task = Task::findOrFail($id);
        $task->update($validated);

        return response()->json($task);
    }

    public function pending()
    {
        $tasks = Task::where('is_completed', false)->get();
        return response()->json($tasks);
    }
}
