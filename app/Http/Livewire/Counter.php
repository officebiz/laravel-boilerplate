<?php

namespace App\Http\Livewire;

use App\Events\CounterUpdated;
use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    protected $listeners = ['echo:counters,CounterUpdated' => 'refreshCounter'];

    public function increment()
    {
        $this->count++;
        event(new CounterUpdated($this->count));
    }

    public function decrement()
    {
        $this->count--;
        event(new CounterUpdated($this->count));
    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function refreshCounter($data)
    {
        $this->count = $data['value'] ?? $this->count;
    }
}
