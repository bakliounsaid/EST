<?php

namespace App\Livewire\Admin\Players;

use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.admin.players.edit')->layoutData(['title' => __('New category')]);
    }
}
