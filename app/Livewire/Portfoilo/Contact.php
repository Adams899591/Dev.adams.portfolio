<?php

namespace App\Livewire\Portfoilo;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Events\MessageEvent;

class Contact extends Component
{

    public $email;
    public $message;
   
  
   // submit Form
   public function submitForm(){

       $validated = $this->validate([
           "email" => ["required", "email"],
           "message" => ["required", "string"]
       ]); 



       event(new MessageEvent($validated));
        
        $this->reset();
        Session::flash('status', 'Message sent successfully!');

   }



    public function render()
    {
        return view('livewire.portfoilo.contact')->layout("layouts.app");
    }
}
