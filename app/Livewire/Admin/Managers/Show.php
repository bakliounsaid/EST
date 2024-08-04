<?php

namespace App\Livewire\Admin\Managers;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.admin.managers.show')->layoutData(['title' => __('New category')]);
    }
}
