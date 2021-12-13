<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Portfolio;

class ShowPortfolio extends Component
{
    public $portfolioid;
    public function render()
    {
        return view('livewire.show-portfolio', [
            'pageArray' => Portfolio::where('id', $this->portfolioid)->get()
        ]);
    }
}
