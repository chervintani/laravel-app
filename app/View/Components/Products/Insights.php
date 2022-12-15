<?php

namespace App\View\Components\Products;

use Illuminate\View\Component;

class Insights extends Component
{
    /**
     *
     * @var string
     */
    public $totalProducts;

    /**
     * Create a new component instance.
     * @param string $totalProducts
     * @return void
     */
    public function __construct($totalProducts)
    {
        $this->totalProducts = $totalProducts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('pages.products.insights');
    }
}
