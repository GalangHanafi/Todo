<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class TodoTable extends Component
{
    use WithPagination;

    #[Url()]
    public $search;
    // #[Url()]
    // public $deleted;
    #[Url()]
    public $finished;

    #[On('searchQueryUpdated')]
    public function updatedSearchQuery($search)
    {
        $this->reset();
        $this->search = $search;
    }

    // #[On('show-deleted')]
    // public function showDeleted()
    // {
    //     $this->reset('finished', 'deleted');
    //     $this->deleted = true;
    // }

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
        Todo::destroy($id);
    }

    public function render()
    {
        $query = Todo::query();

        if ($this->search) {
            $query->where('todo', 'like', '%' . $this->search . '%')->orWhere('description', 'like', '%' . $this->search . '%');
        }

        // if ($this->deleted) {
        //     $query->onlyTrashed();
        // }

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
