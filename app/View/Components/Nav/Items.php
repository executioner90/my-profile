<?php

namespace App\View\Components\Nav;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Items extends Component
{
    public bool $mobile;

    public function __construct(bool $mobile = false)
    {
        $this->mobile = $mobile;
    }

    public function render(): View|Closure|string
    {
        return view('components.nav.items');
    }
}
