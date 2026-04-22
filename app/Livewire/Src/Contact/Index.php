<?php

namespace App\Livewire\Src\Contact;

use App\Models\Branch;
use App\Models\Mail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Index extends Component
{
    public $branchs;

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
    public function mount($branchs = null)
    {
        $this->branchs = Branch::all();
    }
    public function render()
    {
        return view('livewire.src.contact.index', [
            'branchs' => $this->branchs
        ]);
    }
}
