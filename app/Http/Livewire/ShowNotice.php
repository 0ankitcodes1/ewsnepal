<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Notice;

class ShowNotice extends Component
{
    public $noticeid;
    public function render()
    {
        return view('livewire.show-notice', [
            'pageArray' => Notice::where('id', $this->noticeid)->get()
        ]);
    }
}
