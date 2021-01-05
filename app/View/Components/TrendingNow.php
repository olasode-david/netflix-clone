<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TrendingNow extends Component
{
    public $trendings;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($trendings)
    {
        $this->trendings = $trendings;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.trending-now');
    }
}
