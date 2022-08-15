<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;

class PacelModel extends Component
{   
   // public $data;
    public $show;

    protected $listeners = ['showModal' => 'showModal'];

    // public function mount($data) {
    //    // $this->data = $data;
    //     $this->show = false;
    // }

    
    public $showDiv = "yes";

    public function openDiv()
    {
        $this->showDiv ='no';
    }
    public function openDiv1()
    {
        $this->showDiv ='yes';
    }

    public function showModal($data) {
        $this->data = $data;

        $this->doShow();
    }

    public function doShow() {
        $this->show = true;
    }

    public function doClose() {
        $this->show = false;
    }

    public function doSomething() {
        // Do Something With Your Modal

        // Close Modal After Logic
        $this->doClose();
    }
    public function render()
    {
        return view('livewire.modals.pacel-model');
    }
}
