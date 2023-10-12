<?php

namespace App\Livewire\Todo;

use Livewire\Component;

class Search extends Component
{
    public $searchText = '';
    public $searchQuery = '';

    // public function updatedSearchQuery()
    // {
    //     $this->dispatch('searchQueryUpdated', searchQuery: $this->searchQuery);
    // }

    public function search() {
        $this->searchQuery = $this->searchText;
        $this->dispatch('searchQueryUpdated', searchQuery: $this->searchQuery);
    }


    public function render()
    {
        return view('livewire.todo.search');
    }
}
