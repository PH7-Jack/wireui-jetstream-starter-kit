<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WireUiComponents extends Component
{
    public ?string $select = null;

    public ?string $currency = null;

    public ?string $datetime = null;

    public function render()
    {
        return view('livewire.wire-ui-components');
    }
}
