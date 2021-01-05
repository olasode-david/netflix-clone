<?php

namespace App\View\Components;

use Illuminate\View\Component;

class topRated extends Component
{
    public $topRateds;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($topRateds)
    {

        $this->topRateds = $topRateds;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.top-rated');
    }
}
