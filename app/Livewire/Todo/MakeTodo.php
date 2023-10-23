<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;

class MakeTodo extends Component
{
    #[Rule('required|min:1')]
    public $todo;

    public $description;

    #[Rule('required|date')]
    public $deadline;

    public function createTodo()
    {
        if (auth()->check()) {
            $userId = auth()->user()->id;
            // $userId now contains the ID of the currently authenticated user
        }

        $this->validate();
        // $arr = array('Todo' => $this->todo, 'desc' => $this->description, 'deadline' => $this->deadline);
        // dd($arr);

        Todo::create([
            'todo' => $this->todo,
            'description' => $this->description,
            'deadline' => $this->deadline,
            'user_id' => $userId
        ]);

        return $this->redirect('/todo');
    }

    public function render()
    {
        return view('livewire.todo.make-todo');
    }
}
