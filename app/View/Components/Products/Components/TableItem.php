<?php

namespace App\View\Components\Products\Components;

use Illuminate\View\Component;

class TableItem extends Component
{
    /**
     * The alert type.
     *
     * @var object
     */
    public $product;

    /**
     * Create a new component instance.
     *
     * @param  object  $product
     * @return void
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('products.components.table-item');
    }
}
