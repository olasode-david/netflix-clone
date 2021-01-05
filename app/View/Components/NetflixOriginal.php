<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NetflixOriginal extends Component
{
    public $netflixOriginals;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($netflixOriginals)
    {
        $this->netflixOriginals = $netflixOriginals;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.netflix-original');
    }
}
