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
        $yearAfter = Carbon::now()->addYears(1);
        $yearBefore = Carbon::now()->subYears(1);

        $finishedTodos = ['Finish'];
        $lateTodos = ['Late'];
        $todoTodos = ['Todo'];
        $deletedTodos = ['Deleted'];

        foreach ($finishedTodos as $finishedTodo) {
            Todo::create([
                'todo' => $finishedTodo,
                'description' => fake()->text(),
                'deadline' => $now,
                'finished' => $now,
                'user_id' => 1,
            ]);
        }

        foreach ($lateTodos as $lateTodo) {
            Todo::create([
                'todo' => $lateTodo,
                'description' => fake()->text(),
                'deadline' => $yearBefore,
                'user_id' => 1,
            ]);
        }

        foreach ($todoTodos as $todoTodo) {
            Todo::create([
                'todo' => $todoTodo,
                'description' => fake()->text(),
                'deadline' => $yearAfter,
                'user_id' => 1,
            ]);
        }

        foreach ($deletedTodos as $deletedTodo) {
            Todo::create([
                'todo' => $deletedTodo,
                'description' => fake()->text(),
                'deadline' => $now,
                'user_id' => 1,
                'deleted_at' => $now,
            ]);
        }

        foreach ($finishedTodos as $finishedTodo) {
            Todo::create([
                'todo' => $finishedTodo,
                'description' => fake()->text(),
                'deadline' => $now,
                'finished' => $now,
                'user_id' => 2,
            ]);
        }
    }
}
