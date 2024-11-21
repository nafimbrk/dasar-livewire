<?php

namespace App\Livewire;

use Livewire\Component;

class Tutorial extends Component
{
    public $hobi = 'bermain game';
    public $warna_kesukaan = 'biru';

    public $proses = [];

    public function mount()
    {
        $this->hobi = 'main bola';
        $this->warna_kesukaan = 'hitam';
        $this->proses[] = 'sedang di mount';
    }

    public function hydrate()
    {
        $this->proses[] = 'sedang di hydrate';
    }

    public function updating($name, $value)
    {
        $this->proses[] = "sedang di updating => $name & $value";
    }

    public function updated($name, $value)
    {
        $this->proses[] = "sedang di updated => $name & $value";
    }

    public function updatingWarnaKesukaan($value)
    {
        $this->proses[] = "sedang di updatingWarnaKesukaan => $value";
    }

    public function updatedWarnaKesukaan($value)
    {
        $this->proses[] = "sedang di updatedWarnaKesukaan => $value";
    }

    public function render()
    {
        $this->proses[] = 'sedang di render';
        $this->proses[] = '---';
        return view('livewire.tutorial');
    }
}
