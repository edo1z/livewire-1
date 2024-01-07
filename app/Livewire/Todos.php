<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;

class Todos extends Component
{
    /**
     * @var \Illuminate\Database\Eloquent\Collection|static[]
     */
    public $todos = [];
    public $title = '';

    public function mount()
    {
        $this->todos = Todo::where('user_id', auth()->id())->get();
    }

    public function add()
    {
        $newTodo = Todo::create([
            'user_id' => auth()->id(),
            'title' => $this->title,
        ]);

        $this->title = '';
        $this->todos = Todo::where('user_id', auth()->id())->get();
    }

    public function delete($id)
    {
        $todo = Todo::where('user_id', auth()->id())->findOrFail($id);
        if ($todo) {
            $todo->delete();
            $this->todos = $this->todos->reject(function ($todo) use ($id) {
                return $todo->id == $id;
            });
        }
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
