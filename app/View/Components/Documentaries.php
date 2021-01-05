<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Documentaries extends Component
{
    public $documentaries;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($documentaries)
    {
        $this->documentaries = $documentaries;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.documentaries');
    }
}
