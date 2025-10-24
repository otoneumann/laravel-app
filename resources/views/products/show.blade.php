<x-layout>
    <h1>ID:{{ $product->id }} - {{ $product->name }}</h1>
    <h1>{{ $product->description }}</h1>
    <h1>{{ $product->size }}</h1>

    <a href="{{ route('products.edit', $product->id) }}">Edit</a>

    <form method="post" action="{{ route('products.destroy', $product) }}">
        @csrf
        @method('DELETE')

        <button>Delete</button>
    </form>
</x-layout>
