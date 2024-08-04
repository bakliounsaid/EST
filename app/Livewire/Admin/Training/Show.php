<?php

namespace App\Livewire\Admin\Training;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.admin.training.show')->layoutData(['title' => __('New category')]);
    }
}
