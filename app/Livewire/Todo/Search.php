<?php

namespace App\Livewire\Todo;

use Livewire\Component;

class Search extends Component
{
    public $search;

    public function updatedSearch () {
        $this->dispatch('searchQueryUpdated', search: $this->search);
    }

    public function render()
    {
        return view('livewire.todo.search');
    }
}
