<?php

namespace App\Livewire\Admin\Matches;

use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.admin.matches.edit')->layoutData(['title' => __('New category')]);
    }
}
