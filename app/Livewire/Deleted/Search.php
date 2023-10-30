<?php

namespace App\Livewire\Deleted;

use Livewire\Component;

class Search extends Component
{
    public $search;

    public function updatedSearch () {
        $this->dispatch('searchQueryUpdated', search: $this->search);
    }

    public function render()
    {
        return view('livewire.deleted.search');
    }
}
