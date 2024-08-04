<?php

namespace App\Livewire\Admin\Categories;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.admin.categories.show')->layoutData(['title' => __('New category')]);
    }
}
