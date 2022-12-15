<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavbarLayout extends Component
{

    /**
     *
     * @var string
     */
    public $activeTab;

    /**
     * Create a new component instance.
     *
     * @param string $activeTab
     * @return void
     */
    public function __construct($activeTab)
    {
        $this->activeTab = $activeTab;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('pages.navbar-layout');
    }
}
