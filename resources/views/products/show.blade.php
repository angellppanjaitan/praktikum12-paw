<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold mb-4">{{ $product->name }}</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <span class="block text-gray-500 text-sm">Price</span>
                                <span class="text-xl font-semibold">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            </div>
                            
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <span class="block text-gray-500 text-sm">Stock</span>
                                <span class="text-xl font-semibold">{{ $product->stock }} Units</span>
                            </div>

                            <div class="p-4 bg-gray-50 rounded-lg">
                                <span class="block text-gray-500 text-sm">SKU</span>
                                <span class="text-mono font-semibold">{{ $product->sku }}</span>
                            </div>

                            <div class="p-4 bg-gray-50 rounded-lg">
                                <span class="block text-gray-500 text-sm">Created At</span>
                                <span class="text-gray-700">{{ $product->created_at->format('d M Y, H:i') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 border-t pt-4">
                        <a href="{{ route('products.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Back to List
                        </a>
                        
                        @if(Auth::user()->role === 'admin')
                            <a href="{{ route('products.edit', $product->id) }}" class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-2 px-4 rounded">
                                Edit Product
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
