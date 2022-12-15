<table class="table-auto w-full text-gray-600">
    <thead>
        <tr class="uppercase border-b-2 text-left bg-slate-200 children:pl-3">
            <th class="py-3">Product Name</th>
            <th>Material</th>
            <th>Category</th>
            <th>Price</th>
            <th>Inventory</th>
            <th>Date Added</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <x-products.components.table-item :product="$product" />
        @endforeach
    </tbody>
</table>
