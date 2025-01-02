<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        try {
            return inertia('Tasks/Index', [
                'tasks' => Task::paginate(10),
            ]);
        } catch (\Exception $e) {
            return inertia('Tasks/Index', [
                'tasks' => [],
                'error' => 'Failed to load tasks.',
            ]);
        }
    }
}
