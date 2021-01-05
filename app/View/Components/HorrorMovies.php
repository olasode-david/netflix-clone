<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HorrorMovies extends Component
{
    public $horrorMovies;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($horrorMovies)
    {
        $this->horrorMovies = $horrorMovies;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.horror-movies');
    }
}
