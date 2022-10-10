<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Livewire\Component;

class Counter extends Component
{

    public $name = ' ';
    public $namee = ' ';
    public $loud = false;
    public $greeting = ['Hello'];

    public $count = 0;
    public function render()
    {
        return view('livewire.counter');
    }

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function mount($namee)
    {
        $this->namee = $namee;
    }

    public function updatedMount($namee)
    {
        $this->namee = strtoupper($namee);
    }
}
