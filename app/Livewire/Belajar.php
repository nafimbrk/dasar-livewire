<?php

namespace App\Livewire;

use Livewire\Component;

class Belajar extends Component
{
    // public $nama = 'perempuan';
    // public $show_password = false;

    public $keranjang = 0;

    public function render()
    {
        return view('livewire.belajar');
    }

    public function plus()
    {
        // $this->keranjang += 1;
        $this->keranjang++;
    }

    public function minus()
    {
        // $this->keranjang -= 1;
        $this->keranjang--;
    }
}
