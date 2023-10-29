<?php

namespace App\Livewire\Todo;

use Livewire\Component;

class Filter extends Component
{
    public $finished;
    public $deleted;

    public function clearFilter()
    {
        $this->reset();

        $this->dispatch('clear-filter');
    }

    public function showFinished()
    {
        $this->reset();
        $this->finished = true;

        $this->dispatch('show-finished');
    }

    public function render()
    {
        return view('livewire.todo.filter');
    }
}
