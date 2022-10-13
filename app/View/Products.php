<?php

namespace App\View\Products;

use Illuminate\View\Component;

class Products extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $success;

    /**
     * Create a new component instance.
     *
     * @param  string  $success
     * @return void
     */
    public function __construct($success)
    {
        $this->success = $success;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('products.index');
    }
}
