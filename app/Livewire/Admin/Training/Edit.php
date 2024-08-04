<?php

namespace App\Livewire\Admin\Training;

use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.admin.training.edit')->layoutData(['title' => __('New category')]);
    }
}
