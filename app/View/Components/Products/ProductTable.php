<?php

namespace App\View\Components\Products;

use Illuminate\View\Component;

class ProductTable extends Component
{
    /**
     *
     * @var object
     */
    public $products;

    /**
     * Create a new component instance.
     *
     * @param object
     * @return void
     */
    public function __construct($products)
    {
        $this->products = $products;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('pages.products.product-table');
    }
}
