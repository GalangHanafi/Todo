<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class TodoTable extends Component
{
    use WithPagination;

    public $searchQuery = '';
    public $showDeleted = false;
    public $showFinished = false;

    #[On('searchQueryUpdated')]

    public function updatedSearchQuery()
    {
        dd($this->search);
    }

    public function render()
    {
        return view('livewire.todo.todo-table', [
            'todos' => Todo::where(function ($query) {
                if ($this->showDeleted) {
                    // Filter for deleted TODO items
                    $query->where('deleted', 1);
                } elseif ($this->showFinished) {
                    // Filter for finished TODO items
                    $query->where('finished', 1);
                } else {
                    // Default filter for non-deleted and non-finished TODO items
                    $query->where('finished', 0)
                        ->where(function ($subQuery) {
                            $subQuery->where('todo', 'like', '%' . $this->searchQuery . '%')
                                ->orWhere('description', 'like', '%' . $this->searchQuery . '%');
                        });
                }
            })->paginate(10),
        ]);
    }
}
