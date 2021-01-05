<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ComedyMovies extends Component
{
    public $comedyMovies;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($comedyMovies)
    {
        $this->comedyMovies = $comedyMovies;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.comedy-movies');
    }
}
