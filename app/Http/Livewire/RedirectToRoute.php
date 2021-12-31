<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class RedirectToRoute extends ModalComponent
{
    public function mount()
    {
        // Here is a condition that fails. And when it fails, I'd like to redirect to a page.
        $something = null;

        if (! $something) {
            return redirect(route('page'))->with('error', 'Something was not found, or does not belong to you.');
        }
        
        // $something was found. Continue with the rest.
    }

    public function render()
    {
        return view('livewire.redirect-to-route');
    }
}
