<?php

namespace App\Livewire\Admin\Managers;

use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.admin.managers.edit')->layoutData(['title' => __('New category')]);
    }
}
