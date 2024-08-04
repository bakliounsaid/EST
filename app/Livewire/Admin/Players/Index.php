<?php

namespace App\Livewire\Admin\Players;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.players.index')->layoutData(['title' => __('New category')]);
    }
}
