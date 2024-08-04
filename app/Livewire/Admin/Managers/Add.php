<?php

namespace App\Livewire\Admin\Managers;

use Livewire\Component;

class Add extends Component
{
    public function render()
    {
        return view('livewire.admin.managers.add')->layoutData(['title' => __('New category')]);
    }
}
