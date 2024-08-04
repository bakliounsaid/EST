<?php

namespace App\Livewire\Admin\Managers;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.managers.index')->layoutData(['title' => __('New category')]);
    }
}
