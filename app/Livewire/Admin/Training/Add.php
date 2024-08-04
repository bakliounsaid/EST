<?php

namespace App\Livewire\Admin\Training;

use Livewire\Component;

class Add extends Component
{
    public function render()
    {
        return view('livewire.admin.training.add')->layoutData(['title' => __('New category')]);
    }
}
