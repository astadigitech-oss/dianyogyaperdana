<?php

namespace App\Livewire\Components;

use App\Models\Mail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate('required')]
    public $name = '', $company = '', $subject = '', $email = '', $message = '';

    public function save()
    {
        $this->validate();

        Mail::create( 
            $this->only(['name', 'company', 'subject', 'email', 'message'])
        );

        session()->flash('success', 'Success!');
    }

    public function render()
    {
        return view('livewire.components.contact-form');
    }
}
