<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="w-full h-auto min-h-screen flex flex-col justify-center items-center bg-cream">
                        <div class="w-80 min-h-[90vh] flex flex-col md:min-h-0 md:h-[70vh] md:w-[687px] md:flex-row bg-white rounded-xl drop-shadow-lg overflow-hidden pb-3 md:pb-0">
                            <!-- banner image -->
                            <div class="w-full md:w-1/2 group overflow-hidden">
                                <img src="{{ asset('/storage/' . $product->photo) }}" class="md:hidden w-full max-h-[300px] object-cover group-hover:scale-110 group-hover:rotate-2 duration-200">
                                <img src="{{ asset('/storage/' . $product->photo) }}" class="hidden md:block w-full h-full object-cover group-hover:scale-110 group-hover:rotate-2 duration-200">
                            </div>
                            <div class="md:w-1/2 md:flex flex-col md:mt-8">
                                 <!-- title and description -->
                                <div class="w-full h-auto p-6 md:p-8">
                                    <h1 class="text-xs uppercase font-semibold -mt-3 text-gray-700 tracking-widest font-roboto">{{ $product->category->name }}</h1>
                                    <h1 class="text-3xl md:text-4xl font-bold text-accent font-notoSerif">{{ $product->name }}</h1>
                                    <p class="my-2 md:my-4 text-sm font-roboto text-gray-700">{{ $product->description }}</p>
                                </div>
                                 <!-- price and discount  -->
                                <div class="flex flex-row items-center -mt-6 md:mt pl-6 md:pl-8">
                                    <span class="text-3xl font-bold text-accent font-notoSerif">${{ $product->price }}.98</span>
                                    <p class="text-sm text-gray-500 font-li line-through mx-3 font-roboto">$289.99</p>
                                </div>
                                <div class="w-full h-auto flex flex-row justify-center">
                                    <!-- button add to cart -->
                                    <form action="{{ route('admin.product.destroy', $product->slug) }}" method="POST" class="inline-block w-[40%]">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" onclick="return confirm('delete?')" class="w-full md:my-6 h-10 rounded-md my-3 mr-1 flex flex-row justify-center items-center drop-shadow bg-red-600">
                                            <span class="text-sm font-semibold text-white font-roboto">Remove Product</span>
                                        </button>
                                    </form>
                                    <a href="{{ route('admin.product.edit', $product->slug) }}" class="w-[40%] md:my-6 h-10 rounded-md my-3 ml-1 flex flex-row justify-center items-center drop-shadow bg-yellow-600">
                                        <span class="text-sm font-semibold text-white font-roboto">Edit Product</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
