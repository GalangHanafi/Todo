<?php

namespace App\Livewire\Deleted;

use App\Models\Todo;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

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

    public function delete($id)
    {
        $todo = Todo::query();
        $todo->where('id', $id)
            ->forceDelete();
    }

    public function restore($id)
    {
        $todo = Todo::query();
        $todo->where('id', $id)
            ->restore();
    }

    public function render()
    {
        $userId = auth()->user()->id;

        $query = User::find($userId)->todos()->onlyTrashed();
        if ($this->search) {
            $query->where('todo', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%')
                ->onlyTrashed();
        }

        if ($this->finished) {
            $query->whereNotNull('finished')->onlyTrashed();
        }

        $todos = $query
            ->orderBy('finished', 'asc')
            ->orderBy('deadline')
            ->paginate(10);

        // dd($todos->first());
        return view('livewire.deleted.todo-table', [
            'todos' => $todos,
        ]);
    }
}
