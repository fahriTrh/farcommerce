@extends('layouts.farcom')
@section('content')
{{-- include header --}}
@include('components.header')

{{-- wrapper product --}}
<div class="w-full h-auto min-h-screen flex flex-col justify-center items-center bg-cream">
    <div class="w-80 min-h-[90vh] flex flex-col md:min-h-0 md:h-[70vh] md:w-[687px] md:flex-row bg-white rounded-xl drop-shadow-lg overflow-hidden pb-3 md:pb-0">
        <!-- banner image -->
        <div class="w-full md:w-1/2 bg-blue-500 group overflow-hidden">
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
                <span class="text-3xl font-bold text-accent font-notoSerif">${{ $product->price }}.99</span>
                <p class="text-sm text-gray-500 font-li line-through mx-3 font-roboto">$169.99</p>
            </div>
            <!-- button add to cart -->
            <form action="/cartStore" method="post" class="inline">
                @csrf
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="slug" value="{{ $product->slug }}">
                <input type="hidden" name="photo" value="{{ $product->photo }}">
                <input type="hidden" name="category" value="{{ $product->category->name }}">
                <input type="hidden" name="user" value="{{ $product->user->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <input type="hidden" name="description" value="{{ $product->description }}">
                <button id="btnAddProduct" class="w-[80%] md:my-6 h-10 rounded-md my-3 mx-6 md:mx-8 flex flex-row justify-center items-center drop-shadow bg-primary">
                    <svg width="14" height="15" xmlns="http://www.w3.org/2000/svg"><path d="M14.383 10.388a2.397 2.397 0 0 0-1.518-2.222l1.494-5.593a.8.8 0 0 0-.144-.695.8.8 0 0 0-.631-.28H2.637L2.373.591A.8.8 0 0 0 1.598 0H0v1.598h.983l1.982 7.4a.8.8 0 0 0 .799.59h8.222a.8.8 0 0 1 0 1.599H1.598a.8.8 0 1 0 0 1.598h.943a2.397 2.397 0 1 0 4.507 0h1.885a2.397 2.397 0 1 0 4.331-.376 2.397 2.397 0 0 0 1.12-2.021ZM11.26 7.99H4.395L3.068 3.196h9.477L11.26 7.991Zm-6.465 6.392a.8.8 0 1 1 0-1.598.8.8 0 0 1 0 1.598Zm6.393 0a.8.8 0 1 1 0-1.598.8.8 0 0 1 0 1.598Z" fill="#FFF"/></svg>
                    <div class="mx-1"></div>
                    <span class="text-sm font-semibold text-white font-roboto">Add to Cart</span>
                </button>
            </form>
        </div>
    </div>
</div>
<div id="overlay" class="hidden lg:hidden top-0 bottom-0 left-0 right-0 bg-black/40 z-10 fixed"></div>



{{-- include footer --}}
@include('components.footer')
@endsection
@push('script')
<script>
    const menu = document.querySelector('#menu')
    const offCanvas = document.querySelector('#off-canvas')
    const overlay = document.querySelector('#overlay')
    const close = document.querySelector('#close')
    const btnAddProduct = document.querySelector('#btnAddProduct')
    const mark = document.querySelector('#mark')
    console.log(mark);

    menu.onclick = (e) => {
        e.preventDefault();
        offCanvas.classList.remove('hidden')
        overlay.classList.remove('hidden')
    }
    
    close.onclick = (e) => {
        e.preventDefault();
        offCanvas.classList.add('hidden')
        overlay.classList.add('hidden')
    }
</script>
@endpush