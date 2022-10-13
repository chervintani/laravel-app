<tr class="children:pl-3 children:py-4">
    <td>{{ $product->name }}</td>
    <td>{{ $product->material }}</td>
    <td>{{ $product->category }}</td>
    <td>$@convert($product->price) </td>
    <td>{{ number_format($product->inventory) }}</td>
    <td>{{ \Carbon\Carbon::parse($product->created_at)->format('F j, Y') }}</td>
</tr>
