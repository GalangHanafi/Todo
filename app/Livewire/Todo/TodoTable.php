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
    public $search = '';
    #[Url()]
    public $deleted = false;
    #[Url()]
    public $finished = false;

    #[On('searchQueryUpdated')]
    public function updatedSearchQuery($searchQuery)
    {
        $this->search = $searchQuery;
    }

    public function render()
    {
        return view('livewire.todo.todo-table', [
            'todos' => Todo::where(function ($query) {
                if ($this->deleted) {
                    // Filter for deleted TODO items
                    $query->where('deleted', 1);
                } elseif ($this->finished) {
                    // Filter for finished TODO items
                    $query->where('finished', 1);
                } else {
                    // Default filter for non-deleted and non-finished TODO items
                    $query->where('finished', 0)
                        ->where(function ($subQuery) {
                            $subQuery->where('todo', 'like', '%' . $this->search . '%')
                                ->orWhere('description', 'like', '%' . $this->search . '%');
                        });
                }
            })->paginate(8),
        ]);
    }
}
