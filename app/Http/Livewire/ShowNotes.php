<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\News;

class ShowNotes extends Component
{
    public $noteid;
    public function render()
    {
        return view('livewire.show-notes', [
            'pageArray' => News::where('id', $this->noteid)->get()
        ]);
    }
}
