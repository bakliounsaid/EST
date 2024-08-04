<?php

namespace App\Livewire\Admin\Players;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.admin.players.show')->layoutData(['title' => __('New category')]);
    }
}
