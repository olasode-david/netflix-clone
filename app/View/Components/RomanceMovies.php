<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RomanceMovies extends Component
{
    public $romanceMovies;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($romanceMovies)
    {
        $this->romanceMovies = $romanceMovies;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.romance-movies');
    }
}
