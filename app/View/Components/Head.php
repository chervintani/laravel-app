<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Head extends Component
{
    /**
     *
     * @var string
     */
    public $title;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @return void
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('pages.head');
    }
}
