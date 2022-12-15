<tr class="children:pl-3 children:py-1">
    <td>{{ $product->name }}</td>
    <td>{{ $product->material }}</td>
    <td>{{ $product->category }}</td>
    <td>$@convert($product->price) </td>
    <td>{{ number_format($product->inventory) }}</td>
    <td>{{ \Carbon\Carbon::parse($product->created_at)->format('F j, Y') }}</td>
    <td class="flex">
        <button class="p-2 bg-white border-blue-100 border-1 rounded-full hover:bg-blue-300 duration-100"><i class="fa-sharp fa-solid fa-pen text-blue-500"></i></button>
        <button class="p-2 bg-white border-blue-100 border-1 rounded-full hover:bg-blue-300 duration-100"><i class="fa-solid fa-trash text-red-500"></i></button>
    </td>
</tr>
