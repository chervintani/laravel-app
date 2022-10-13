@extends('head_layout')
@section('title', 'Products Page')

<div class="flex">
    <x-navbar-layout active-tab="products" />
    <div class="flex-auto p-[50px]">
        <div class="flex justify-between">
            <h4 class="text-3xl font-light">
                Product Inventory
            </h4>
            <button
                class="uppercase py-2 px-5 rounded-3xl border-2 text-white border-blue-500 bg-blue-500 hover:bg-white hover:text-blue-500 duration-300"
                data-toggle="modal" data-target="myModal" id="addProduct"><i class="fa-solid fa-plus"></i> &nbsp; Add
                Product </button>
            <x-products.components.add-product-modal />
        </div>
        <div class="my-10">
            <div>
                <p class="text-lg text-gray-600">Total Products</p>
                <h1 class="font-bold text-4xl text-blue-500">{{ $products->total() }}</h1>
            </div>
        </div>
        <div class="w-full">
            <table class="table-auto w-full text-gray-600">
                <thead>
                    <tr class="uppercase border-b-2 text-left bg-slate-200 children:pl-3">
                        <th class="py-3">Product Name</th>
                        <th>Material</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Inventory</th>
                        <th>Date Added</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <x-products.components.table-item :product="$product" />
                    @endforeach
                </tbody>
            </table>
        </div>
        <div
            class="w-full mt-6 text-gray-600">
            {{ $products->links() }}
        </div>
    </div>
    @if (Session::get('success'))
        <div class="absolute right-5 top-5 bg-green-300 py-5 px-8 rounded-md text-gray-600" id="success-popover">
            <h2 class="font-bold">Success</h2>
            <p class="text-sm">{{ Session::get('success') }}</p>
        </div>
    @endif
</div>
<script>
    $(document).ready(function() {
        setTimeout(() => {
            $('#success-popover').fadeOut(300)
        }, 3000);
    })
</script>
