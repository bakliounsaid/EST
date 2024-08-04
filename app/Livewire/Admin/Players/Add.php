<?php

namespace App\Livewire\Admin\Players;

use Livewire\Component;

class Add extends Component
{
    public function render()
    {
        return view('livewire.admin.players.add')->layoutData(['title' => __('New category')]);
    }
}
