@extends('layouts.farcom')
@section('content')
{{-- include header --}}
@include('components.header')

<div class="w-full h-auto py-10 md:mt-8 px-10 md:px-16 lg:px-20">
    @if($products->count())
    <div class="w-full h-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 md:gap-8">
        @foreach($products as $product)
        <div class="w-auto h-auto flex flex-col mx-auto sm:mx-0 relative" data-aos="zoom-out">
            <div class="h-[200px] w-[250px] rounded-md bg-primary overflow-hidden group">
                <img src="{{ asset('/storage/' . $product->photo) }}" class="w-full h-full object-cover">

                <div class="opacity-0 group-hover:opacity-100 duration-300 absolute top-0 min-w-[250px] h-auto py-2 bg-primary/50 flex flex-row justify-end items-center">
                    <form action="/cartDestroy" method="POST" class="inline">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <button type="submit" class="text-white font-roboto font-semibold pr-3 cursor-pointer">delete</button>
                    </form>
                </div>
            </div>
            <div class="h-[200px] w-[250px] p-3">
                <h1 class="text-accent line-clamp-1 text-lg font-notoSerif bg-white font-semibold">{{ $product->name }}</h1>
                <h2 class="text-gray-500 text-sm font-roboto bg-white">{{ $product->category }}</h2>
                <div class="mt-2 w-full text-xs font-roboto text-gray-500"><p class="line-clamp-2">{{ $product->description }}</p></div>
                <a href="/show">
                    <div class="px-4 py-2 mt-4 rounded-md bg-primary flex justify-center items-center">
                        <a href="/show/{{ $product->slug }}" class="text-white text-sm font-roboto">Show Detail</a>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="w-full mb-[300px] md:mb-[350px]">
        <h1 class="text-center text-primary text-2xl font-notoSerif">Nothing</h1>
    </div>
    @endif
</div>
{{-- include footer kesayangan --}}
@include('components.footer')
<div id="overlay" class="hidden lg:hidden top-0 bottom-0 left-0 right-0 bg-black/40 z-10 fixed"></div>

{{-- include footer --}}
{{-- @include('components.footer') --}}
@endsection
@push('script')
<script>
    const menu = document.querySelector('#menu')
    const offCanvas = document.querySelector('#off-canvas')
    const overlay = document.querySelector('#overlay')
    const close = document.querySelector('#close')

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