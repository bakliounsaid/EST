<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.settings.index')->layoutData(['title' => __('New category')]);
    }
}
