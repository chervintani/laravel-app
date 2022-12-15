<x-navbar-layout active-tab="products">
    <div class="flex-auto p-[50px]">
        <x-products.header />
        <div class="my-10">
            <x-products.insights :total-products="$products->total()" />
        </div>
        <div class="w-full">
            <x-products.product-table :products="$products" />
        </div>
        <x-products.pagination :links="$products->links()" />
        {{-- <x-login::testing /> --}}
    </div>
    <x-products.popover />
</x-navbar-layout>
