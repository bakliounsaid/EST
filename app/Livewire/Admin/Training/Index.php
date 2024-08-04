<?php

namespace App\Livewire\Admin\Training;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.training.index')->layoutData(['title' => __('New category')]);
    }
}
