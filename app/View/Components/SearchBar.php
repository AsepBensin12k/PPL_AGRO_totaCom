<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchBar extends Component
{
    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @param string $placeholder
     */
    public function __construct($placeholder = 'Cari Produk...')
    {
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render(): View|Closure|string
    {
        return view('components.search-bar');
    }
}
