<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class LandingPage extends Component
{
    #[Title('Watan.ai - The Ai powered pocket Accountant')]
    public function render()
    {
        return view('livewire.landing-page');
    }
}
