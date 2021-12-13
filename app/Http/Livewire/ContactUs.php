<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactUs extends Component
{
    public $name;
    public $email;
    public $subject;
    public $comment;

    protected $rules = [
        'name' => 'required|min:4|max:255',
        'email' => 'required|email|min:4|max:255',
        'subject' => 'nullable|max:255',
        'comment' => 'required|min:5|max:1000',
    ];

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function save() {
        $this->validate();
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'comment' => $this->comment,
        ]);
        session()->flash('page-message', 'Contact inquiry successfully sent.');
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
