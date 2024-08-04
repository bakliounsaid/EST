<?php

namespace App\Livewire\Admin\Categories;

use Livewire\Component;

class Add extends Component
{
    public function render()
    {
        return view('livewire.admin.categories.add')->layoutData(['title' => __('New category')]);
    }
}
