<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ActionMovies extends Component
{
    public $actionMovies;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($actionMovies)
    {
        $this->actionMovies = $actionMovies;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.action-movies');
    }
}
