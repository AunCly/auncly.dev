<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class PlayQuetsche extends Component
{

    public string $word;
    public string $answer;
    public string $best = '';

    public array $solutions = [
        'et',
        'que',
        'cheque',
    ];

    #[Layout('quetsche')]
    public function render()
    {
        return view('livewire.play-quetsche');
    }

    public function play()
    {
        $this->word = 'quetsche';
    }

    public function try(){
        if(in_array($this->answer, $this->solutions)){
            if($this->best === '' || strlen($this->answer) > strlen($this->best)){
                $this->best = $this->answer;
            }
        }
        else{
            session()->flash('message', 'Ce mot n\'existe pas !');
        }
    }

}
