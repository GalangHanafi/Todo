<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;

class TodoTable extends Component
{
    use WithPagination;

    #[Url()]
    public $search;

    #[Url()]
    public $finished;

    public $id, $todo, $description, $deadline;

    #[On('searchQueryUpdated')]
    public function updatedSearchQuery($search)
    {
        $this->reset();
        $this->search = $search;
    }

    #[On('show-finished')]
    public function showFinished()
    {
        $this->reset();
        $this->finished = true;
    }

    #[On('clear-filter')]
    public function clearFilter()
    {
        $this->reset();
    }

    public function clicked()
    {
        dd('clicked');
    }

    public function updateModal($todo)
    {
        $this->id = $todo['id'];
        $this->todo = $todo['todo'];
        $this->description = $todo['id'];
        $this->deadline = $todo['deadline'];
    }

    public function update()
    {
        $updated = array(
            'id' => $this->id,
            'todo' => $this->todo,
            'description' => $this->description,
            'deadline' => $this->deadline,
        );

        Todo::where('id', $this->id)
            ->update([
                'id' => $this->id,
                'todo' => $this->todo,
                'description' => $this->description,
                'deadline' => $this->deadline,
            ]);
    }

    public function delete($id)
    {
        Todo::destroy($id);
    }

    public function render()
    {
        $userId = auth()->user()->id;

        $query = User::find($userId)->todos();
        if ($this->search) {
            $query->where('todo', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%');
        }

        if ($this->finished) {
            $query->whereNotNull('finished');
        }

        $todos = $query
            ->orderBy('finished', 'asc')
            ->orderBy('deadline')
            ->paginate(10);

        return view('livewire.todo.todo-table', [
            'todos' => $todos,
        ]);
    }
}
