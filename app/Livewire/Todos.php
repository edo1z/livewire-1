<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todos = [];
    public $title = '';

    public function add()
    {
        $this->todos[] = $this->title;
        $this->title = '';
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
