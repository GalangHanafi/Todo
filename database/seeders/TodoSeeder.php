<?php

namespace Database\Seeders;

use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        $aYearAgo = $now->subYear();
        $aYearLater = $now->addYear();

        $finishedTodos = ['Finish 1', 'Finish 2', 'Finish 3', 'Finish 4', 'Finish 5',];
        $lateTodos = ['Late 1', 'Late 2', 'Late 3', 'Late 4', 'Late 5',];
        $todoTodos = ['Todo 1', 'Todo 2', 'Todo 3', 'Todo 4', 'Todo 5',];

        foreach ($finishedTodos as $finishedTodo) {
            Todo::create([
                'todo' => $finishedTodo,
                'description' => Str::random(20),
                'deadline' => $now,
                'finished' => 1,
                'user_id' => 1,
            ]);
        }

        foreach ($lateTodos as $lateTodo) {
            Todo::create([
                'todo' => $lateTodo,
                'description' => Str::random(20),
                'deadline' => $aYearAgo,
                'finished' => 0,
                'user_id' => 1,
            ]);
        }

        foreach ($todoTodos as $todoTodo) {
            Todo::create([
                'todo' => $todoTodo,
                'description' => Str::random(20),
                'deadline' => $aYearLater,
                'finished' => 0,
                'user_id' => 1,
            ]);
        }
    }
}
