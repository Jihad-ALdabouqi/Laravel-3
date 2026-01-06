@foreach($products as $product)
    <p>
        {{ $product['name'] }} -
        {{ $product['price'] }}
        <a href="/products/{{ $product['name'] }}">View</a>
    </p>
@endforeach