<?php

namespace App\Livewire;

use Livewire\Component;

class Carousel extends Component
{

    public $medias;

    public function mount($medias)
    {
        $this->medias = $medias;
    }

    public function render()
    {
        return view('livewire.carousel', [
            'medias' => $this->medias,
        ]);
    }
}
