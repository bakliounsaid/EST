<?php

namespace App\Livewire\Admin\Matches;

use Livewire\Component;

class Add extends Component
{
    public function render()
    {
        return view('livewire.admin.matches.add')->layoutData(['title' => __('New category')]);
    }
}
