
   <title>Products</title>
   <x-layout>

</x-layout>
        @foreach ($products as $product)
            <div class="bg-white p-4 rounded shadow">

                <h2 class="text-xl font-semibold">
                    {{ $product['name'] }}
                </h2>

               
                @if ($product['price'] < 100)
                    <span class="inline-block bg-red-500 text-white text-xs px-2 py-1 rounded">
                        SALE
                    </span>
                @endif

                <p class="text-gray-600 mt-2">
                    {{ $product['description'] }}
                </p>

                <p class="mt-3 font-bold text-lg">
                    €{{ $product['price'] }}
                </p>

            </div>
        @endforeach

    </div>

