<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;

class Index extends Component
{
    public $currency = "";
    public function mount()
    {
        $this->currency = setting('currency', 'DZD');

    }
    public function render()
    {
        return view('livewire.admin.dashboard.index')->layoutData(['title' =>  __('Tableau de bord') ]);
    }
}
