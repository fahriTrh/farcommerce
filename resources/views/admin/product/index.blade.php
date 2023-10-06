<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('success'))
            <div class="p-4 mb-4 text-sm text-primary bg-white drop-shadow rounded-lg" role="alert">
                <span class="font-medium">{{ session('success') }}</span>
            </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('admin.product.create') }}" class="px-4 py-2 inline-block -translate-y-3 text-white font-roboto text-sm rounded-lg bg-primary">Add Product</a>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        @if($products->count())
                        <table class="w-full text-sm text-left text-gray-500 darks:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 darks:bg-gray-700 darks:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span>Image</span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        product
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        price
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr class="bg-white border-b darks:bg-gray-800 darks:border-gray-700 hover:bg-gray-50 darks:hover:bg-gray-600">
                                    <td class="px-6 py-4 font-semibold text-gray-900 darks:text-white">{{ $loop->iteration }}</td>
                                    <td class="w-20 p-4 h-20 block">
                                        <a href="{{ route('admin.product.show', $product->slug) }}">
                                            <img src="{{ asset('/storage/' . $product->photo) }}" class="h-full w-full object-cover rounded-full">
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 darks:text-white">
                                        <a href="{{ route('admin.product.show', $product->slug) }}" class="hover:underline underline-offset-2 duration-200">
                                            {{ $product->name }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 darks:text-white">
                                        {{ $product->price }}
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 darks:text-white">
                                        {{ $product->category->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('admin.product.destroy', $product->slug) }}" method="POST" class="inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="font-medium text-red-600 darks:text-red-500 hover:underline mr-2" onclick="return confirm('remove?')">Remove</button>
                                        </form>
                                        <a href="{{ route('admin.product.edit', $product->slug) }}" class="font-medium text-yellow-500 darks:text-red-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <h1 class="text-center font-roboto text-red-500">No Products found!</h1>
                        @endif
                    </div>
                    <div class="mt-2">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
